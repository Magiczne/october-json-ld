<?php namespace Magiczne\JsonLd\Components\Level2\CreativeWork;

use Magiczne\JsonLd\Components\Level1\CreativeWork;

class Photograph extends CreativeWork
{
    public function componentDetails()
    {
        return [
            'name' => 'Photograph',
            'description' => 'https://schema.org/Photograph'
        ];
    }
}
