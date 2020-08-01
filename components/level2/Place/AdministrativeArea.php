<?php namespace Magiczne\JsonLd\Components\Level2\Place;

use Magiczne\JsonLd\Components\Level1\Place;

class AdministrativeArea extends Place
{
    public function componentDetails()
    {
        return [
            'name' => 'AdministrativeArea',
            'description' => 'https://schema.org/AdministrativeArea'
        ];
    }
}
