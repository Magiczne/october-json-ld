<?php namespace Magiczne\JsonLd;

use Magiczne\JsonLd\Components\Person;
use Magiczne\JsonLd\Components\Place;
use Magiczne\JsonLd\Components\Product;
use Magiczne\JsonLd\Components\Thing;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            // Level 0
            Thing::class => 'Thing',

            // Level 1
            Person::class => 'Person',
            Place::class => 'Place',
            Product::class => 'Product'
        ];
    }
}
