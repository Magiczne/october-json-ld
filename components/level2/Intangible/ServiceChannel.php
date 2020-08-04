<?php namespace Magiczne\JsonLd\Components\Level2\Intangible;

use Magiczne\JsonLd\Components\Level1\Intangible;

class ServiceChannel extends Intangible
{
    public function componentDetails()
    {
        return [
            'name' => 'ServiceChannel',
            'description' => 'https://schema.org/ServiceChannel'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'availableLanguage',
            'processingTime',
            'providesService',
            'serviceLocation',
            'servicePhone',
            'servicePostalAddress',
            'serviceSmsNumber',
            'serviceUrl'
        ], 'ServiceChannel'));
    }
}
