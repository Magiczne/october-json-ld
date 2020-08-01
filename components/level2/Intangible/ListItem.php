<?php namespace Magiczne\JsonLd\Components\Level2\Intangible;

use Magiczne\JsonLd\Components\Level1\Intangible;

class ListItem extends Intangible
{
    public function componentDetails()
    {
        return [
            'name' => 'ListItem',
            'description' => 'https://schema.org/ListItem'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'item',
            'nextItem',
            'position',
            'previousItem'
        ], 'ListItem'));
    }
}
