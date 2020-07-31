<?php namespace Magiczne\JsonLd\Components\Level3\StructuredValue;

use Magiczne\JsonLd\Classes\Enumerations\Enumerations;
use Magiczne\JsonLd\Components\Level2\Intangible\StructuredValue;

class ContactPoint extends StructuredValue
{
    public function componentDetails()
    {
        return [
            'name' => 'ContactPoint',
            'description' => 'https://schema.org/ContactPoint'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'areaServed',
            'availableLanguage',
            'contactOption' => Enumerations::$contactPointOption,
            'contactType',
            'email',
            'faxNumber',
            'hoursAvailable',
            'productSupported',
            'telephone'
        ], 'ContactPoint'));
    }
}
