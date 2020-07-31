<?php namespace Magiczne\JsonLd\Components\Level4\ImageObject;

use Magiczne\JsonLd\Components\Level3\MediaObject\ImageObject;

class Barcode extends ImageObject
{
    public function componentDetails()
    {
        return [
            'name' => 'Barcode',
            'description' => 'https://schema.org/Barcode'
        ];
    }
}
