<?php namespace Magiczne\JsonLd\Components;

use Cms\Classes\ComponentBase;
use Exception;
use Magiczne\JsonLd\Classes\CommonFields;
use Magiczne\JsonLd\Classes\Enumerations\Enumerations;
use Magiczne\JsonLd\Models\Settings;
use October\Rain\Support\Arr;
use October\Rain\Support\Str;

class Thing extends ComponentBase
{
    // region Constants

    /**
     * Separator used for assigning multiple components to one field
     */
    const COMPONENT_SEPARATOR = ';';

    /**
     * Prefix used for referencing components on current layout
     */
    const LAYOUT_PREFIX = 'layout:';

    /**
     * Prefix used for referencing components on current page
     */
    const PAGE_PREFIX = 'page:';

    // endregion

    // region ComponentBase

    public function componentDetails()
    {
        return [
            'name' => 'Thing',
            'description' => 'https://schema.org/Thing'
        ];
    }

    public function defineProperties()
    {
        return $this->generateProperties([
            'additionalType',
            'alternateName',
            'description',
            'disambiguatingDescription',
            'identifier',
            'image',
            'mainEntityOfPage',
            'name',
            'potentialAction',
            'sameAs',
            'subjectOf',
            'url'
        ], 'Thing');
    }

    // endregion

    /**
     * Return component data as an array.
     *
     * @return array|string
     * @throws Exception
     */
    public function toArray()
    {
        $properties = collect($this->defineProperties())->mapWithKeys(function ($item, $key) {
            return [
                $key => $this->getValueOf($key)
            ];
        })->toArray();

        // array_filter here to remove empty and null values
        return array_filter(array_merge([
            '@type' => $this->name
        ], $properties));
    }

    /**
     * Return component data as a pretty-printed json with context.
     * Method used to render JSON-LD data in a <script> tag.
     *
     * @return string
     * @throws Exception
     */
    public function toJson(): string
    {
        $prettyPrint = Settings::get('pretty_print', false);

        $jsonFlags = $prettyPrint
            ? JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
            : JSON_UNESCAPED_UNICODE;

        $jsonArray = array_merge([
            '@context' => 'https://schema.org'
        ], $this->toArray());

        return json_encode($jsonArray, $jsonFlags);
    }

    /**
     * Generate properties data based on array keys.
     * If array key is associated with value and value is an array data will be merged.
     *
     * @param array $properties
     * @param string $group
     * @return array
     */
    protected function generateProperties(array $properties, string $group): array
    {
        return collect($properties)->mapWithKeys(function ($item, $key) use ($group) {
            if (is_array($item)) {
                $propertyData = array_merge([
                    'title' => "magiczne.jsonld::lang.properties.{$key}",
                    'group' => $group
                ], $item);

                return [ $key => $propertyData ];
            } else {
                $propertyData = [
                    'title' => "magiczne.jsonld::lang.properties.{$item}",
                    'group' => $group
                ];

                return [ $item => $propertyData ];
            }
        })->toArray();
    }

    /**
     * Get value of property based on some rules:
     * a) If property value is "page:componentName" get data from component "componentName" located on current page
     * b) If property value is "layout:componentName" get data from component "componentName" located on current layout
     * c) In any other case just return property value which can be string or null
     *
     * @param string $property
     * @return array|string|null
     *
     * @throws Exception
     */
    protected function getValueOf(string $property)
    {
        $propertyValue = $this->property($property);
        $computedValue = [];

        foreach (explode(self::COMPONENT_SEPARATOR, $propertyValue) as $propertyValueItem) {
            $trimmedValue = trim($propertyValueItem);

            // If value starts with "page:" resolve the component staying behind that name
            // in the current page components and get its array representation
            if (Str::startsWith($trimmedValue, self::PAGE_PREFIX)) {
                $componentName = Str::substr($trimmedValue, strlen(self::PAGE_PREFIX));
                $computedValue[] = $this->getComponentDataFromPage($componentName);
                continue;
            }

            // If value starts with "layout:" resolve the component staying behind that name
            // in the current layout components and get its array representation
            if (Str::startsWith($trimmedValue, self::LAYOUT_PREFIX)) {
                $componentName = Str::substr($trimmedValue, strlen(self::LAYOUT_PREFIX));
                $computedValue[] = $this->getComponentDataFromLayout($componentName);
                continue;
            }

            // In other case just get property value but return null when value
            // is equal to one of the "No data" constants
            $emptyValues = [ CommonFields::BOOLEAN_NO_DATA, Enumerations::ENUM_NO_DATA ];
            $computedValue[] = in_array($trimmedValue, $emptyValues, true) ? null : $trimmedValue;
        }

        // If there are no elements in the array return null
        // If there is only one element - return that element
        // If there are multiple elements - return array with that elements
        switch (count($computedValue)) {
            case 0:
                return null;

            case 1:
                return $computedValue[0];

            default:
                return $computedValue;
        }
    }

    /**
     * Get data from component located on the current layout
     *
     * @param string $componentName
     * @return array
     * @throws Exception
     */
    protected function getComponentDataFromLayout(string $componentName): array
    {
        if (!Arr::has($this->page->layout->components, $componentName)) {
            $layoutName = $this->page->layout->getFileName();
            throw new Exception("Component with name '${componentName}' does not exists on current layout ({$layoutName})");
        }

        $component = $this->page->layout->components[$componentName];

        if (!$component instanceof Thing) {
            throw new Exception('Component is not a valid JSON-LD component');
        }

        return $component->toArray();
    }

    /**
     * Get data from component located on the same page
     *
     * @param string $componentName
     * @return array
     * @throws Exception
     */
    protected function getComponentDataFromPage(string $componentName): array
    {
        if (!Arr::has($this->page->page->components, $componentName)) {
            $pageName = $this->page->page->title;
            throw new Exception("Component with name '${componentName}' does not exists on current page ({$pageName})");
        }

        $component = $this->page->page->components[$componentName];

        if (!$component instanceof Thing) {
            throw new Exception('Component is not a valid JSON-LD component');
        }

        return $component->toArray();
    }
}
