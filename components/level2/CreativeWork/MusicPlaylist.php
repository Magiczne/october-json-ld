<?php namespace Magiczne\JsonLd\Components\Level2\CreativeWork;

use Magiczne\JsonLd\Components\Level1\CreativeWork;

class MusicPlaylist extends CreativeWork
{
    public function componentDetails()
    {
        return [
            'name' => 'MusicPlaylist',
            'description' => 'https://schema.org/MusicPlaylist'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'numTracks',
            'track'
        ], 'MusicPlaylist'));
    }
}
