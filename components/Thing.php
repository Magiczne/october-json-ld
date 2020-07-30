<?php namespace Magiczne\JsonLd\Components;

use Cms\Classes\ComponentBase;
use Exception;
use October\Rain\Support\Arr;
use October\Rain\Support\Str;

class Thing extends ComponentBase
{
    public $dropdownBoolean = [
        'type' => 'dropdown',
        'default' => 'boolean::no-data',
        'options' => [
            'https://schema.org/True' => 'magiczne.jsonld::lang.global.yes',
            'https://schema.org/False' => 'magiczne.jsonld::lang.global.no',
            'boolean::no-data' => 'magiczne.jsonld::lang.global.no-data'
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
        return [
            'additionalType' => [
                'title' => 'magiczne.jsonld::lang.properties.additionalType',
                'group' => 'Thing'
            ],
            'alternateName' => [
                'title' => 'magiczne.jsonld::lang.properties.alternateName',
                'group' => 'Thing'
            ],
            'description' => [
                'title' => 'magiczne.jsonld::lang.properties.description',
                'group' => 'Thing'
            ],
            'disambiguatingDescription' => [
                'title' => 'magiczne.jsonld::lang.properties.disambiguatingDescription',
                'group' => 'Thing'
            ],
            'identifier' => [
                'title' => 'magiczne.jsonld::lang.properties.identifier',
                'group' => 'Thing'
            ],
            'image' => [
                'title' => 'magiczne.jsonld::lang.properties.image',
                'group' => 'Thing'
            ],
            'mainEntityOfPage' => [
                'title' => 'magiczne.jsonld::lang.properties.mainEntityOfPage',
                'group' => 'Thing'
            ],
            'name' => [
                'title' => 'magiczne.jsonld::lang.properties.name',
                'group' => 'Thing'
            ],
            'potentialAction' => [
                'title' => 'magiczne.jsonld::lang.properties.potentialAction',
                'group' => 'Thing'
            ],
            'sameAs' => [
                'title' => 'magiczne.jsonld::lang.properties.sameAs',
                'group' => 'Thing'
            ],
            'subjectOf' => [
                'title' => 'magiczne.jsonld::lang.properties.subjectOf',
                'group' => 'Thing'
            ],
            'url' => [
                'title' => 'magiczne.jsonld::lang.properties.url',
                'group' => 'Thing'
            ],
        ];
    }

    /**
     * Return component data as an array.
     * Remember to call array_filter to remove empty and null values
     *
     * @return array
     * @throws Exception
     */
    public function toArray()
    {
        // array_filter here to remove empty and null values
        return array_filter([
            '@type' => $this->name,
            'additionalType' => $this->getValueOf('additionalType'),
            'alternateName' => $this->getValueOf('alternateName'),
            'description' => $this->getValueOf('description'),
            'disambiguatingDescription' => $this->getValueOf('disambiguatingDescription'),
            'identifier' => $this->getValueOf('identifier'),
            'image' => $this->getValueOf('image'),
            'mainEntityOfPage' => $this->getValueOf('mainEntityOfPage'),
            'name' => $this->getValueOf('name'),
            'potentialAction' => $this->getValueOf('potentialAction'),
            'sameAs' => $this->getValueOf('sameAs'),
            'subjectOf' => $this->getValueOf('subjectOf'),
            'url' => $this->getValueOf('url')
        ]);
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

                if (!method_exists($component, 'toArray')) {
                    throw new Exception('JSON-LD component should implement method toArray method');
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

                if (!method_exists($component, 'toArray')) {
                    throw new Exception('JSON-LD component should implement method toArray method');
                }

                return $component->toArray();
            }

            $layoutName = $this->page->layout->getFileName();
            throw new Exception("Component with name '${componentName}' does not exists on current layout ({$layoutName})");
        }

        // In other case just return property value
        return $value === 'boolean::no-data' ? null : $value;
    }
}
