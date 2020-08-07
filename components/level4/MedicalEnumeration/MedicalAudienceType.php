<?php namespace Magiczne\JsonLd\Components\Level4\MedicalEnumeration;

use Magiczne\JsonLd\Classes\Enumerations\MedicalEnumerations;
use Magiczne\JsonLd\Components\Level3\Enumeration\MedicalEnumeration;

class MedicalAudienceType extends MedicalEnumeration
{
    public function componentDetails()
    {
        return [
            'name' => 'MedicalAudienceType',
            'description' => 'https://schema.org/MedicalAudienceType'
        ];
    }

    public function defineProperties()
    {
        return [
            'value' => array_merge(MedicalEnumerations::$medicalAudienceType, [
                'title' => 'magiczne.jsonld::lang.global.value'
            ])
        ];
    }
}
