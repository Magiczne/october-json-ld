<?php namespace Magiczne\JsonLd\Components\Level2\CreativeWork;

use Magiczne\JsonLd\Components\Level1\CreativeWork;

class SoftwareSourceCode extends CreativeWork
{
    public function componentDetails()
    {
        return [
            'name' => 'SoftwareSourceCode',
            'description' => 'https://schema.org/SoftwareSourceCode'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'codeRepository',
            'codeSampleType',
            'programmingLanguage',
            'runtimePlatform',
            'targetProduct'
        ], 'SoftwareSourceCode'));
    }
}
