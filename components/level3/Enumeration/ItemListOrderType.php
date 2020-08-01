<?php namespace Magiczne\JsonLd\Components\Level3\Enumeration;

use Magiczne\JsonLd\Classes\Enumerations\Enumerations;
use Magiczne\JsonLd\Components\Level2\Intangible\Enumeration;

class ItemListOrderType extends Enumeration
{
    public function componentDetails()
    {
        return [
            'name' => 'ItemListOrderType',
            'description' => 'https://schema.org/ItemListOrderType'
        ];
    }

    public function defineProperties()
    {
        return [
            'value' => array_merge(Enumerations::$itemListOrderType, [
                'title' => 'magiczne.jsonld::lang.global.value'
            ])
        ];
    }
}
