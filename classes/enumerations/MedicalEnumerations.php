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

    /**
     * https://schema.org/MedicalStudyStatus
     */
    public static $medicalStudyStatus = [
        'type' => 'dropdown',
        'default' => 'enum::no-data',
        'options' => [
            'https://schema.org/ActiveNotRecruiting' => 'magiczne.jsonld::lang.enumerations.medicalStudyStatus.activeNotRecruiting',
            'https://schema.org/Completed' => 'magiczne.jsonld::lang.enumerations.medicalStudyStatus.completed',
            'https://schema.org/EnrollingByInvitation' => 'magiczne.jsonld::lang.enumerations.medicalStudyStatus.enrollingByInvitation',
            'https://schema.org/NotYetRecruiting' => 'magiczne.jsonld::lang.enumerations.medicalStudyStatus.notYetRecruiting',
            'https://schema.org/Recruiting' => 'magiczne.jsonld::lang.enumerations.medicalStudyStatus.recruiting',
            'https://schema.org/ResultsAvailable' => 'magiczne.jsonld::lang.enumerations.medicalStudyStatus.resultsAvailable',
            'https://schema.org/ResultsNotAvailable' => 'magiczne.jsonld::lang.enumerations.medicalStudyStatus.resultsNotAvailable',
            'https://schema.org/Suspended' => 'magiczne.jsonld::lang.enumerations.medicalStudyStatus.suspended',
            'https://schema.org/Terminated' => 'magiczne.jsonld::lang.enumerations.medicalStudyStatus.terminated',
            'https://schema.org/Withdrawn' => 'magiczne.jsonld::lang.enumerations.medicalStudyStatus.withdrawn',
            'enum::no-data' => 'magiczne.jsonld::lang.global.noData'
        ]
    ];
}
