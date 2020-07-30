<?php namespace Magiczne\JsonLd\Components;

class PropertyValue extends Thing
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
