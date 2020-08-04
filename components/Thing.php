<?php namespace Magiczne\JsonLd\Components;

use Cms\Classes\ComponentBase;
use Exception;
use October\Rain\Support\Arr;
use October\Rain\Support\Str;

class Thing extends ComponentBase
{
    // TODO: Move this to helper class
    public $dropdownBoolean = [
        'type' => 'dropdown',
        'default' => 'boolean::no-data',
        'options' => [
            'https://schema.org/True' => 'magiczne.jsonld::lang.global.yes',
            'https://schema.org/False' => 'magiczne.jsonld::lang.global.no',
            'boolean::no-data' => 'magiczne.jsonld::lang.global.noData'
        ]
    ];

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

    /**
     * Return component data as an array.
     *
     * @return array
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
    public function toJson()
    {
        $jsonArray = array_merge([
            '@context' => 'https://schema.org'
        ], $this->toArray());

        return json_encode($jsonArray, JSON_PRETTY_PRINT);
    }

    /**
     * Generate properties data based on array keys.
     * If array key is associated with value and value is an array data will be merged.
     *
     * @param array $properties
     * @param string $group
     * @return array
     */
    protected function generateProperties(array $properties, string $group)
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
        $value = $this->property($property);

        // If property values starts with "page:" resolve the component staying behind that name
        // in the current page components and return its array representation
        if (Str::startsWith($value, 'page:')) {
            $componentName = Str::substr($value, 5);

            if (Arr::has($this->page->page->components, $componentName)) {
                $component = $this->page->page->components[$componentName];

                if (!$component instanceof Thing) {
                    throw new Exception('Component is not a valid JSON-LD component');
                }

                return $component->toArray();
            }

            $pageName = $this->page->page->title;
            throw new Exception("Component with name '${componentName}' does not exists on current page ({$pageName})");
        }

        // If property starts with "layout:" resolve the component staying behind that name
        // in the current layout components and return its array representation
        if (Str::startsWith($value, 'layout:')) {
            $componentName = Str::substr($value, 7);

            if (Arr::has($this->page->layout->components, $componentName)) {
                $component = $this->page->layout->components[$componentName];

                if (!$component instanceof Thing) {
                    throw new Exception('Component is not a valid JSON-LD component');
                }

                return $component->toArray();
            }

            $layoutName = $this->page->layout->getFileName();
            throw new Exception("Component with name '${componentName}' does not exists on current layout ({$layoutName})");
        }

        // In other case just return property value
        $emptyValues = [
            'boolean::no-data', 'enum::no-data'
        ];

        return in_array($value, $emptyValues, true) ? null : $value;
    }
}
