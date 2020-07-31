<?php namespace Magiczne\JsonLd\Components\Level2\CreativeWork;

use Magiczne\JsonLd\Components\Level1\CreativeWork;

class Review extends CreativeWork
{
    public function componentDetails()
    {
        return [
            'name' => 'Review',
            'description' => 'https://schema.org/Review'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'itemReviewed',
            'reviewAspect',
            'reviewBody',
            'reviewRating'
        ], 'Review'));
    }
}
