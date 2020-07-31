<?php namespace Magiczne\JsonLd\Components\Level2\Intangible;

use Magiczne\JsonLd\Components\Level1\Intangible;

class EntryPoint extends Intangible
{
    public function componentDetails()
    {
        return [
            'name' => 'EntryPoint',
            'description' => 'https://schema.org/EntryPoint'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'actionApplication',
            'actionPlatform',
            'contentType',
            'encodingType',
            'httpMethod',
            'urlTemplate'
        ], 'EntryPoint'));
    }
}
