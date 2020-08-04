<?php namespace Magiczne\JsonLd\Components\Level2\CreativeWork;

use Magiczne\JsonLd\Components\Level1\CreativeWork;

class MusicRecording extends CreativeWork
{
    public function componentDetails()
    {
        return [
            'name' => 'MusicRecording',
            'description' => 'https://schema.org/MusicRecording'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'byArtist',
            'duration',
            'inAlbum',
            'inPlaylist',
            'isrcCode',
            'recordingOf'
        ], 'MusicRecording'));
    }
}
