<?php namespace Magiczne\JsonLd\Components\Level2\Intangible;

use Magiczne\JsonLd\Components\Level1\Intangible;

class ItemList extends Intangible
{
    public function componentDetails()
    {
        return [
            'name' => 'ItemList',
            'description' => 'https://schema.org/ItemList'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'itemListElement',
            'itemListOrder',
            'numberOfItems'
        ], 'ItemList'));
    }
}
