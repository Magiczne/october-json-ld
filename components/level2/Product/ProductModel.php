<?php namespace Magiczne\JsonLd\Components\Level2\Product;

use Magiczne\JsonLd\Components\Level1\Product;

class ProductModel extends Product
{
    public function componentDetails()
    {
        return [
            'name' => 'ProductModel',
            'description' => 'https://schema.org/ProductModel'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'isVariantOf',
            'predecessorOf',
            'successorOf'
        ], 'ProductModel'));
    }
}
