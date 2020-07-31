<?php namespace Magiczne\JsonLd\Components\Level2\CreativeWork;

use Magiczne\JsonLd\Classes\Enumerations\Enumerations;
use Magiczne\JsonLd\Components\Level1\CreativeWork;

class Map extends CreativeWork
{
    public function componentDetails()
    {
        return [
            'name' => 'Map',
            'description' => 'https://schema.org/Map'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'mapType' => Enumerations::$mapCategoryType
        ], 'Map'));
    }
}
