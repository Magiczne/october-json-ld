<?php namespace Magiczne\JsonLd\Components;

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
        return array_merge(parent::defineProperties(), [
            'additionalProperty' => [
                'title' => 'magiczne.jsonld::lang.properties.additionalProperty',
                'group' => 'Product'
            ],
            'aggregateRating' => [
                'title' => 'magiczne.jsonld::lang.properties.aggregateRating',
                'group' => 'Product'
            ],
            'audience' => [
                'title' => 'magiczne.jsonld::lang.properties.audience',
                'group' => 'Product'
            ],
            'award' => [
                'title' => 'magiczne.jsonld::lang.properties.award',
                'group' => 'Product'
            ],
            'brand' => [
                'title' => 'magiczne.jsonld::lang.properties.brand',
                'group' => 'Product'
            ],
            'category' => [
                'title' => 'magiczne.jsonld::lang.properties.category',
                'group' => 'Product'
            ],
            'color' => [
                'title' => 'magiczne.jsonld::lang.properties.color',
                'group' => 'Product'
            ],
            'depth' => [
                'title' => 'magiczne.jsonld::lang.properties.depth',
                'group' => 'Product'
            ],
            'gtin12' => [
                'title' => 'magiczne.jsonld::lang.properties.gtin12',
                'group' => 'Product'
            ],
            'gtin13' => [
                'title' => 'magiczne.jsonld::lang.properties.gtin13',
                'group' => 'Product'
            ],
            'gtin14' => [
                'title' => 'magiczne.jsonld::lang.properties.gtin14',
                'group' => 'Product'
            ],
            'gtin8' => [
                'title' => 'magiczne.jsonld::lang.properties.gtin8',
                'group' => 'Product'
            ],
            'height' => [
                'title' => 'magiczne.jsonld::lang.properties.height',
                'group' => 'Product'
            ],
            'isAccessoryOrSparePartFor' => [
                'title' => 'magiczne.jsonld::lang.properties.isAccessoryOrSparePartFor',
                'group' => 'Product'
            ],
            'isConsumableFor' => [
                'title' => 'magiczne.jsonld::lang.properties.isConsumableFor',
                'group' => 'Product'
            ],
            'isRelatedTo' => [
                'title' => 'magiczne.jsonld::lang.properties.isRelatedTo',
                'group' => 'Product'
            ],
            'isSimilarTo' => [
                'title' => 'magiczne.jsonld::lang.properties.isSimilarTo',
                'group' => 'Product'
            ],
            'isVariantOf' => [
                'title' => 'magiczne.jsonld::lang.properties.isVariantOf',
                'group' => 'Product'
            ],
            'itemCondition' => [
                'title' => 'magiczne.jsonld::lang.properties.itemCondition',
                'group' => 'Product'
            ],
            'logo' => [
                'title' => 'magiczne.jsonld::lang.properties.logo',
                'group' => 'Product'
            ],
            'manufacturer' => [
                'title' => 'magiczne.jsonld::lang.properties.manufacturer',
                'group' => 'Product'
            ],
            'material' => [
                'title' => 'magiczne.jsonld::lang.properties.material',
                'group' => 'Product'
            ],
            'model' => [
                'title' => 'magiczne.jsonld::lang.properties.model',
                'group' => 'Product'
            ],
            'mpn' => [
                'title' => 'magiczne.jsonld::lang.properties.mpn',
                'group' => 'Product'
            ],
            'offers' => [
                'title' => 'magiczne.jsonld::lang.properties.offers',
                'group' => 'Product'
            ],
            'productID' => [
                'title' => 'magiczne.jsonld::lang.properties.productID',
                'group' => 'Product'
            ],
            'productionDate' => [
                'title' => 'magiczne.jsonld::lang.properties.productionDate',
                'group' => 'Product'
            ],
            'purchaseDate' => [
                'title' => 'magiczne.jsonld::lang.properties.purchaseDate',
                'group' => 'Product'
            ],
            'releaseDate' => [
                'title' => 'magiczne.jsonld::lang.properties.releaseDate',
                'group' => 'Product'
            ],
            'review' => [
                'title' => 'magiczne.jsonld::lang.properties.review',
                'group' => 'Product'
            ],
            'sku' => [
                'title' => 'magiczne.jsonld::lang.properties.sku',
                'group' => 'Product'
            ],
            'slogan' => [
                'title' => 'magiczne.jsonld::lang.properties.slogan',
                'group' => 'Product'
            ],
            'weight' => [
                'title' => 'magiczne.jsonld::lang.properties.weight',
                'group' => 'Product'
            ],
            'width' => [
                'title' => 'magiczne.jsonld::lang.properties.width',
                'group' => 'Product'
            ]
        ]);
    }
}
