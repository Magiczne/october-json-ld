<?php namespace Magiczne\JsonLd\Components\Level2\CreativeWork;

use Magiczne\JsonLd\Components\Level1\CreativeWork;

class DataCatalog extends CreativeWork
{
    public function componentDetails()
    {
        return [
            'name' => 'DataCatalog',
            'description' => 'https://schema.org/DataCatalog'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'dataset'
        ], 'DataCatalog'));
    }
}
