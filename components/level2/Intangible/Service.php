<?php namespace Magiczne\JsonLd\Components\Level2\Intangible;

use Magiczne\JsonLd\Components\Level1\Intangible;

class Service extends Intangible
{
    public function componentDetails()
    {
        return [
            'name' => 'Service',
            'description' => 'https://schema.org/Service'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'aggregateRating',
            'areaServed',
            'audience',
            'availableChannel',
            'award',
            'brand',
            'broker',
            'category',
            'hasOfferCatalog',
            'hoursAvailable',
            'isRelatedTo',
            'isSimilarTo',
            'logo',
            'offers',
            'provider',
            'providerMobility',
            'review',
            'serviceOutput',
            'serviceType',
            'slogan'
        ], 'Service'));
    }
}
