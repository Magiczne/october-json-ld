<?php namespace Magiczne\JsonLd\Components\Level3\PerformingGroup;

use Magiczne\JsonLd\Components\Level2\Organization\PerformingGroup;

class MusicGroup extends PerformingGroup
{
    public function componentDetails()
    {
        return [
            'name' => 'MusicGroup',
            'description' => 'https://schema.org/MusicGroup'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'album',
            'genre',
            'track'
        ], 'MusicGroup'));
    }
}
