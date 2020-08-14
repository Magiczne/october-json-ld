<?php namespace Magiczne\JsonLd\Components\Level2\CreativeWork;

use Magiczne\JsonLd\Components\Level1\CreativeWork;

class Menu extends CreativeWork
{
    public function componentDetails()
    {
        return [
            'name' => 'Menu',
            'description' => 'https://schema.org/Menu'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'hasMenuItem',
            'hasMenuSection'
        ], 'Menu'));
    }
}
