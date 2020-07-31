<?php namespace Magiczne\JsonLd\Components\Level3\MediaObject;

use Magiczne\JsonLd\Components\Level2\CreativeWork\MediaObject;

class AudioObject extends MediaObject
{
    public function componentDetails()
    {
        return [
            'name' => 'AudioObject',
            'description' => 'https://schema.org/AudioObject'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'caption',
            'transcript'
        ], 'AudioObject'));
    }
}
