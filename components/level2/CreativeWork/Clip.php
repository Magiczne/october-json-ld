<?php namespace Magiczne\JsonLd\Components\Level2\CreativeWork;

use Magiczne\JsonLd\Components\Level1\CreativeWork;

class Clip extends CreativeWork
{
    public function componentDetails()
    {
        return [
            'name' => 'Clip',
            'description' => 'https://schema.org/Clip'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'actor',
            'clipNumber',
            'director',
            'musicBy',
            'partOfEpisode',
            'partOfSeason',
            'partOfSeries'
        ], 'Clip'));
    }
}
