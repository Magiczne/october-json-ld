<?php namespace Magiczne\JsonLd\Components\Level4\PropertyValue;

use Magiczne\JsonLd\Components\Level3\StructuredValue\PropertyValue;

class LocationFeatureSpecification extends PropertyValue
{
    public function componentDetails()
    {
        return [
            'name' => 'LocationFeatureSpecification',
            'description' => 'https://schema.org/LocationFeatureSpecification'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'hoursAvailable',
            'validFrom',
            'validThrough'
        ], 'LocationFeatureSpecification'));
    }
}
