<?php namespace Magiczne\JsonLd;

use Magiczne\JsonLd\Components\Level1\{
    CreativeWork,
    Event,
    Action,
    MedicalEntity,
    Organization,
    Person,
    Place,
    Product
};
use Magiczne\JsonLd\Components\Level2\CreativeWork\MediaObject;
use Magiczne\JsonLd\Components\Level2\Intangible\{AlignmentObject, EntryPoint, StructuredValue};
use Magiczne\JsonLd\Components\Level3\MediaObject\{
    AudioObject,
    DataDownload,
    ImageObject,
    MusicVideoObject,
    VideoObject
};
use Magiczne\JsonLd\Components\Level3\StructuredValue\{PropertyValue, QuantitativeValue};
use Magiczne\JsonLd\Components\Level4\ImageObject\Barcode;
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

            // Level 2 - Intangible
            AlignmentObject::class => 'AlignmentObject',
            EntryPoint::class => 'EntryPoint',
            StructuredValue::class => 'StructuredValue',

            // Level 3 - Media Object
            AudioObject::class => 'AudioObject',
            DataDownload::class => 'DataDownload',
            ImageObject::class => 'ImageObject',
            MusicVideoObject::class => 'MusicVideoObject',
            VideoObject::class => 'VideoObject',

            // Level 3 - Structured Value
            PropertyValue::class => 'PropertyValue',
            QuantitativeValue::class => 'QuantitativeValue',

            // Level 4 - ImageObject
            Barcode::class => 'Barcode'
        ];
    }
}
