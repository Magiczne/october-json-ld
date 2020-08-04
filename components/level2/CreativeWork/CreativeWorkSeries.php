<?php namespace Magiczne\JsonLd\Components\Level2\CreativeWork;

use Magiczne\JsonLd\Components\Level1\CreativeWork;

/**
 * According to https://schema.org/CreativeWorkSeries this schema is as well
 * Thing > Intangible > Series > CreativeWorkSeries
 */
class CreativeWorkSeries extends CreativeWork
{
    public function componentDetails()
    {
        return [
            'name' => 'CreativeWorkSeries',
            'description' => 'https://schema.org/CreativeWorkSeries'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'endDate',
            'issn',
            'startDate'
        ], 'CreativeWorkSeries'));
    }
}
