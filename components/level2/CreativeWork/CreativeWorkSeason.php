<?php namespace Magiczne\JsonLd\Components\Level2\CreativeWork;

use Magiczne\JsonLd\Components\Level1\CreativeWork;

class CreativeWorkSeason extends CreativeWork
{
    public function componentDetails()
    {
        return [
            'name' => 'CreativeWorkSeason',
            'description' => 'https://schema.org/CreativeWorkSeason'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'actor',
            'director',
            'endDate',
            'episode',
            'numberOfEpisodes',
            'partOfSeries',
            'productionCompany',
            'seasonNumber',
            'startDate',
            'trailer'
        ], 'CreativeWorkSeason'));
    }
}
