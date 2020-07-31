<?php namespace Magiczne\JsonLd\Components\Level3\StructuredValue;

use Magiczne\JsonLd\Components\Level2\Intangible\StructuredValue;

class PropertyValue extends StructuredValue
{
    public function componentDetails()
    {
        return [
            'name' => 'PropertyValue',
            'description' => 'https://schema.org/PropertyValue'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'maxValue',
            'minValue',
            'propertyID',
            'unitCode',
            'unitText',
            'value',
            'valueReference'
        ], 'PropertyValue'));
    }
}
