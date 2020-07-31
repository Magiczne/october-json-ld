<?php namespace Magiczne\JsonLd\Components\Level4\ContactPoint;

use Magiczne\JsonLd\Components\Level3\StructuredValue\ContactPoint;

class PostalAddress extends ContactPoint
{
    public function componentDetails()
    {
        return [
            'name' => 'PostalAddress',
            'description' => 'https://schema.org/PostalAddress'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'addressCountry',
            'addressLocality',
            'addressRegion',
            'postOfficeBoxNumber',
            'postalCode',
            'streetAddress'
        ], 'PostalAddress'));
    }
}
