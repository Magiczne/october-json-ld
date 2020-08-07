<?php namespace Magiczne\JsonLd\Components\Level3\MusicPlaylist;

use Magiczne\JsonLd\Classes\Enumerations\Enumerations;
use Magiczne\JsonLd\Components\Level2\CreativeWork\MusicPlaylist;

class MusicRelease extends MusicPlaylist
{
    public function componentDetails()
    {
        return [
            'name' => 'MusicRelease',
            'description' => 'https://schema.org/MusicRelease'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'catalogNumber',
            'creditedTo',
            'duration',
            'musicReleaseFormat' => Enumerations::$musicReleaseFormatType,
            'recordLabel',
            'releaseOf'
        ], 'MusicRelease'));
    }
}
