<?php namespace Magiczne\JsonLd\Components\Level3\StructuredValue;

use Magiczne\JsonLd\Components\Level2\Intangible\StructuredValue;

class GeoCoordinates extends StructuredValue
{
    public function componentDetails()
    {
        return [
            'name' => 'GeoCoordinates',
            'description' => 'https://schema.org/GeoCoordinates'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'address',
            'addressCountry',
            'elevation',
            'latitude',
            'longitude',
            'postalCode'
        ], 'GeoCoordinates'));
    }
}
