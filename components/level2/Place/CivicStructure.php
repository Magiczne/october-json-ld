<?php namespace Magiczne\JsonLd\Components\Level2\Place;

use Magiczne\JsonLd\Components\Level1\Place;

class CivicStructure extends Place
{
    public function componentDetails()
    {
        return [
            'name' => 'CivicStructure',
            'description' => 'https://schema.org/CivicStructure'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'openingHours'
        ], 'CivicStructure'));
    }
}
