<?php namespace Magiczne\JsonLd\Components\Level3\MusicPlaylist;

use Magiczne\JsonLd\Components\Level2\CreativeWork\MusicPlaylist;

class MusicAlbum extends MusicPlaylist
{
    public function componentDetails()
    {
        return [
            'name' => 'MusicAlbum',
            'description' => 'https://schema.org/MusicAlbum'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'albumProductionType',
            'albumRelease',
            'albumReleaseType',
            'byArtist'
        ], 'MusicAlbum'));
    }
}
