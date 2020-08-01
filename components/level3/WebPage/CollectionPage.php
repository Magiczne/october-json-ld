<?php namespace Magiczne\JsonLd\Components\Level3\WebPage;

use Magiczne\JsonLd\Components\Level2\CreativeWork\WebPage;

class CollectionPage extends WebPage
{
    public function componentDetails()
    {
        return [
            'name' => 'CollectionPage',
            'description' => 'https://schema.org/CollectionPage'
        ];
    }
}
