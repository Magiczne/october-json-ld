<?php namespace Magiczne\JsonLd\Components\Level2\CreativeWork;

use Magiczne\JsonLd\Components\Level1\CreativeWork;

class MenuSection extends CreativeWork
{
    public function componentDetails()
    {
        return [
            'name' => 'MenuSection',
            'description' => 'https://schema.org/MenuSection'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'hasMenuItem',
            'hasMenuSection'
        ], 'MenuSection'));
    }
}
