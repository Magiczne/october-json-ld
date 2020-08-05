<?php namespace Magiczne\JsonLd\Classes\Enumerations;

class MedicalEnumerations
{
    /**
     * https://schema.org/MedicalAudienceType
     */
    public static $medicalAudienceType = [
        'type' => 'dropdown',
        'default' => 'enum::no-data',
        'options' => [
            'https://schema.org/Clinician' => 'magiczne.jsonld::lang.enumerations.medicalAudienceType.clinician',
            'https://schema.org/MedicalResearcher' => 'magiczne.jsonld::lang.enumerations.medicalAudienceType.medicalResearcher',
            'enum::no-data' => 'magiczne.jsonld::lang.global.noData'
        ]
    ];
}
