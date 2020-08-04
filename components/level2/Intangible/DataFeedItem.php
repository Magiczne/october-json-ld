<?php namespace Magiczne\JsonLd\Components\Level2\Intangible;

use Magiczne\JsonLd\Components\Level1\Intangible;

class DataFeedItem extends Intangible
{
    public function componentDetails()
    {
        return [
            'name' => 'DataFeedItem',
            'description' => 'https://schema.org/DataFeedItem'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'dateCreated',
            'dateDeleted',
            'dateModified',
            'item'
        ], 'DataFeedItem'));
    }
}
