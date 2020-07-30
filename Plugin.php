<?php namespace Magiczne\JsonLd;

use Magiczne\JsonLd\Components\Action;
use Magiczne\JsonLd\Components\MedicalEntity;
use Magiczne\JsonLd\Components\Organization;
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
            Action::class => 'Action',
            MedicalEntity::class => 'MedicalEntity',
            Organization::class => 'Organization',
            Person::class => 'Person',
            Place::class => 'Place',
            Product::class => 'Product'
        ];
    }
}
