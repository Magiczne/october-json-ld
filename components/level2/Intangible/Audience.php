<?php namespace Magiczne\JsonLd\Components\Level2\Intangible;

use Magiczne\JsonLd\Components\Level1\Intangible;

class Audience extends Intangible
{
    public function componentDetails()
    {
        return [
            'name' => 'Audience',
            'description' => 'https://schema.org/Audience'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'audienceType',
            'geographicArea'
        ], 'Audience'));
    }
}
