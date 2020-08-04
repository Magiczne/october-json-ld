<?php namespace Magiczne\JsonLd\Components\Level2\CreativeWork;

use Magiczne\JsonLd\Components\Level1\CreativeWork;

class Dataset extends CreativeWork
{
    public function componentDetails()
    {
        return [
            'name' => 'Dataset',
            'description' => 'https://schema.org/Dataset'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'distribution',
            'includedInDataCatalog',
            'issn',
        ], 'Dataset'));
    }
}
