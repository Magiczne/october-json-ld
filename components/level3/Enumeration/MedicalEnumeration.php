<?php namespace Magiczne\JsonLd\Components\Level3\Enumeration;

use Magiczne\JsonLd\Components\Level2\Intangible\Enumeration;

class MedicalEnumeration extends Enumeration
{
    public function componentDetails()
    {
        return [
            'name' => 'PhysicalActivityCategory',
            'description' => 'https://schema.org/PhysicalActivityCategory'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
}
