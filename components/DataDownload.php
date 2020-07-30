<?php namespace Magiczne\JsonLd\Components;

class DataDownload extends MediaObject
{
    public function componentDetails()
    {
        return [
            'name' => 'DataDownload',
            'description' => 'https://schema.org/DataDownload'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            // Currently no official properties
        ], 'DataDownload'));
    }
}
