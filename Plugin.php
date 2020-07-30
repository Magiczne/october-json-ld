<?php namespace Magiczne\JsonLd;

use Magiczne\JsonLd\Components\Action;
use Magiczne\JsonLd\Components\AudioObject;
use Magiczne\JsonLd\Components\Barcode;
use Magiczne\JsonLd\Components\CreativeWork;
use Magiczne\JsonLd\Components\DataDownload;
use Magiczne\JsonLd\Components\Event;
use Magiczne\JsonLd\Components\ImageObject;
use Magiczne\JsonLd\Components\MediaObject;
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
            CreativeWork::class => 'CreativeWork',
            Event::class => 'Event',
            MedicalEntity::class => 'MedicalEntity',
            Organization::class => 'Organization',
            Person::class => 'Person',
            Place::class => 'Place',
            Product::class => 'Product',

            // Level 2 - Creative Work
            MediaObject::class => 'MediaObject',

            // Level 3 - Media Object
            AudioObject::class => 'AudioObject',
            DataDownload::class => 'DataDownload',
            ImageObject::class => 'ImageObject',

            // Level 4 - ImageObject
            Barcode::class => 'Barcode'
        ];
    }
}
