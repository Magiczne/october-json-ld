<?php namespace Magiczne\JsonLd\Components\Level3\StructuredValue;

use Magiczne\JsonLd\Components\Level2\Intangible\StructuredValue;

class GeoShape extends StructuredValue
{
    public function componentDetails()
    {
        return [
            'name' => 'GeoShape',
            'description' => 'https://schema.org/GeoShape'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'address',
            'addressCountry',
            'box',
            'circle',
            'elevation',
            'line',
            'polygon',
            'postalCode'
        ], 'GeoShape'));
    }
}
