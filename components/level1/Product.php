<?php namespace Magiczne\JsonLd\Components\Level1;

use Magiczne\JsonLd\Components\Thing;

class Product extends Thing
{
    public function componentDetails()
    {
        return [
            'name' => 'Product',
            'description' => 'https://schema.org/Product'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'additionalProperty',
            'aggregateRating',
            'audience',
            'award',
            'brand',
            'category',
            'color',
            'depth',
            'gtin12',
            'gtin13',
            'gtin14',
            'gtin8',
            'height',
            'isAccessoryOrSparePartFor',
            'isConsumableFor',
            'isRelatedTo',
            'isSimilarTo',
            'isVariantOf',
            'itemCondition',
            'logo',
            'manufacturer',
            'material',
            'model',
            'mpn',
            'offers',
            'productID',
            'productionDate',
            'purchaseDate',
            'releaseDate',
            'review',
            'sku',
            'slogan',
            'weight',
            'width'
        ], 'Product'));
    }
}
