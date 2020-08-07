<?php namespace Magiczne\JsonLd\Components\Level4\MedicalEnumeration;

use Magiczne\JsonLd\Classes\Enumerations\MedicalEnumerations;
use Magiczne\JsonLd\Components\Level3\Enumeration\MedicalEnumeration;

class MedicalStudyStatus extends MedicalEnumeration
{
    public function componentDetails()
    {
        return [
            'name' => 'MedicalStudyStatus',
            'description' => 'https://schema.org/MedicalStudyStatus'
        ];
    }

    public function defineProperties()
    {
        return [
            'value' => array_merge(MedicalEnumerations::$medicalStudyStatus, [
                'title' => 'magiczne.jsonld::lang.global.value'
            ])
        ];
    }
}
