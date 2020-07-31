<?php namespace Magiczne\JsonLd\Components\Level3\Enumeration;

use Magiczne\JsonLd\Classes\Enumerations\Enumerations;
use Magiczne\JsonLd\Components\Level2\Intangible\Enumeration;

class PhysicalActivityCategory extends Enumeration
{
    public function componentDetails()
    {
        return [
            'name' => 'PhysicalActivityCategory',
            'description' => 'https://schema.org/PhysicalActivityCategory'
        ];
    }

    public function defineProperties()
    {
        return [
            'value' => array_merge(Enumerations::$physicalActivityCategory, [
                'title' => 'magiczne.jsonld::lang.global.value'
            ])
        ];
    }
}
