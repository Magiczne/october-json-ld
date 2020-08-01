<?php namespace Magiczne\JsonLd\Components\Level3\Rating;

use Magiczne\JsonLd\Components\Level2\Intangible\Rating;

class AggregateRating extends Rating
{
    public function componentDetails()
    {
        return [
            'name' => 'AggregateRating',
            'description' => 'https://schema.org/AggregateRating'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'itemReviewed',
            'ratingCount',
            'reviewCount'
        ], 'AggregateRating'));
    }
}
