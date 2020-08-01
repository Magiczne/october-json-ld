<?php namespace Magiczne\JsonLd\Components\Level2\CreativeWork;

use Magiczne\JsonLd\Components\Level1\CreativeWork;

class WebPage extends CreativeWork
{
    public function componentDetails()
    {
        return [
            'name' => 'WebPage',
            'description' => 'https://schema.org/WebPage'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'breadcrumb',
            'lastReviewed',
            'mainContentOfPage',
            'primaryImageOfPage',
            'relatedLink',
            'reviewedBy',
            'significantLink',
            'speakable',
            'specialty'
        ], 'WebPage'));
    }
}
