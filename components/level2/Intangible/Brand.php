<?php namespace Magiczne\JsonLd\Components\Level2\Intangible;

use Magiczne\JsonLd\Components\Level1\Intangible;

class Brand extends Intangible
{
    public function componentDetails()
    {
        return [
            'name' => 'Brand',
            'description' => 'https://schema.org/Brand'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'aggregateRating',
            'logo',
            'review',
            'slogan'
        ], 'Brand'));
    }
}
