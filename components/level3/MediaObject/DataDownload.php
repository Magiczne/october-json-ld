<?php namespace Magiczne\JsonLd\Components\Level3\MediaObject;

use Magiczne\JsonLd\Components\Level2\CreativeWork\MediaObject;

class DataDownload extends MediaObject
{
    public function componentDetails()
    {
        return [
            'name' => 'DataDownload',
            'description' => 'https://schema.org/DataDownload'
        ];
    }
}
