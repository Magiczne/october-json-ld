<?php namespace Magiczne\JsonLd\Components\Level3\MediaObject;

use Magiczne\JsonLd\Components\Level2\CreativeWork\MediaObject;

class MusicVideoObject extends MediaObject
{
    public function componentDetails()
    {
        return [
            'name' => 'MusicVideoObject',
            'description' => 'https://schema.org/MusicVideoObject'
        ];
    }
}
