<?php namespace Magiczne\JsonLd\Components\Level3\MediaObject;

use Magiczne\JsonLd\Components\Level2\CreativeWork\MediaObject;

class ImageObject extends MediaObject
{
    public function componentDetails()
    {
        return [
            'name' => 'ImageObject',
            'description' => 'https://schema.org/ImageObject'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'caption',
            'exifData',
            'representativeOfPage' => $this->dropdownBoolean,
            'thumbnail'
        ], 'ImageObject'));
    }
}
