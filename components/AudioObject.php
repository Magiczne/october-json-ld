<?php namespace Magiczne\JsonLd\Components;

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
