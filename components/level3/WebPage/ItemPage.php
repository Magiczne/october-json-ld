<?php namespace Magiczne\JsonLd\Components\Level3\WebPage;

use Magiczne\JsonLd\Components\Level2\CreativeWork\WebPage;

class ItemPage extends WebPage
{
    public function componentDetails()
    {
        return [
            'name' => 'ItemPage',
            'description' => 'https://schema.org/ItemPage'
        ];
    }
}
