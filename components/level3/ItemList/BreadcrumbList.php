<?php namespace Magiczne\JsonLd\Components\Level3\ItemList;

use Magiczne\JsonLd\Components\Level2\Intangible\ItemList;

class BreadcrumbList extends ItemList
{
    public function componentDetails()
    {
        return [
            'name' => 'BreadcrumbList',
            'description' => 'https://schema.org/BreadcrumbList'
        ];
    }
}
