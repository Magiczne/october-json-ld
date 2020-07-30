<?php namespace Magiczne\JsonLd\Components;

class VideoObject extends MediaObject
{
    public function componentDetails()
    {
        return [
            'name' => 'VideoObject',
            'description' => 'https://schema.org/VideoObject'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'actor',
            'caption',
            'director',
            'musicBy',
            'thumbnail',
            'transcript',
            'videoFrameSize',
            'videoQuality'
        ], 'VideoObject'));
    }
}
