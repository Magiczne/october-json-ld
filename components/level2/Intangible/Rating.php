<?php namespace Magiczne\JsonLd\Components\Level2\Intangible;

use Magiczne\JsonLd\Components\Level1\Intangible;

class Rating extends Intangible
{
    public function componentDetails()
    {
        return [
            'name' => 'Rating',
            'description' => 'https://schema.org/Rating'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'author',
            'bestRating',
            'ratingValue',
            'reviewAspect',
            'worstRating'
        ], 'Rating'));
    }
}
