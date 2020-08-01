<?php namespace Magiczne\JsonLd\Components\Level3\ItemList;

use Magiczne\JsonLd\Components\Level2\Intangible\ItemList;

class OfferCatalog extends ItemList
{
    public function componentDetails()
    {
        return [
            'name' => 'OfferCatalog',
            'description' => 'https://schema.org/OfferCatalog'
        ];
    }
}
