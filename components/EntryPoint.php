<?php namespace Magiczne\JsonLd\Components;

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
