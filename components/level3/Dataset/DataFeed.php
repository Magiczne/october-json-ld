<?php namespace Magiczne\JsonLd\Components\Level3\Dataset;

use Magiczne\JsonLd\Components\Level2\CreativeWork\Dataset;

class DataFeed extends Dataset
{
    public function componentDetails()
    {
        return [
            'name' => 'DataFeed',
            'description' => 'https://schema.org/DataFeed'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'dataFeedElement'
        ], 'DataFeed'));
    }
}
