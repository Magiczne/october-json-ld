<?php namespace Magiczne\JsonLd\Components\Level2\CreativeWork;

use Magiczne\JsonLd\Components\Level1\CreativeWork;

class WebPageElement extends CreativeWork
{
    public function componentDetails()
    {
        return [
            'name' => 'WebPageElement',
            'description' => 'https://schema.org/WebPageElement'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'cssSelector',
            'xpath'
        ], 'WebPageElement'));
    }
}
