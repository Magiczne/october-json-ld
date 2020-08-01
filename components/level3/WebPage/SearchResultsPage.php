<?php namespace Magiczne\JsonLd\Components\Level3\WebPage;

use Magiczne\JsonLd\Components\Level2\CreativeWork\WebPage;

class SearchResultsPage extends WebPage
{
    public function componentDetails()
    {
        return [
            'name' => 'SearchResultsPage',
            'description' => 'https://schema.org/SearchResultsPage'
        ];
    }
}
