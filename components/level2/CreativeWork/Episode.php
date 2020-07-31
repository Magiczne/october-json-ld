<?php namespace Magiczne\JsonLd\Components\Level2\CreativeWork;

use Magiczne\JsonLd\Components\Level1\CreativeWork;

class Episode extends CreativeWork
{
    public function componentDetails()
    {
        return [
            'name' => 'Episode',
            'description' => 'https://schema.org/Episode'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'actor',
            'director',
            'episodeNumber',
            'musicBy',
            'partOfSeason',
            'partOfSeries',
            'productionCompany',
            'trailer'
        ], 'Episode'));
    }
}
