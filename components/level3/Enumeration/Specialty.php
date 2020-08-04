<?php namespace Magiczne\JsonLd\Components\Level3\Enumeration;

use Magiczne\JsonLd\Components\Level2\Intangible\Enumeration;

class Specialty extends Enumeration
{
    public function componentDetails()
    {
        return [
            'name' => 'Specialty',
            'description' => 'https://schema.org/Specialty'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
}
