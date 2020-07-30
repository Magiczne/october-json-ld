<?php namespace Magiczne\JsonLd\Classes\Enumerations;

class StatusEnumerations
{
    /*
     * https://schema.org/ActionStatusType
     */
    public static $actionStatusType = [
        'type' => 'dropdown',
        'default' => 'enum::no-data',
        'options' => [
            'https://schema.org/ActiveActionStatus' => 'magiczne.jsonld::lang.enumerations.actionStatusType.active',
            'https://schema.org/CompletedActionStatus' => 'magiczne.jsonld::lang.enumerations.actionStatusType.completed',
            'https://schema.org/FailedActionStatus' => 'magiczne.jsonld::lang.enumerations.actionStatusType.failed',
            'https://schema.org/PotentialActionStatus' => 'magiczne.jsonld::lang.enumerations.actionStatusType.potential',
            'enum::no-data' => 'magiczne.jsonld::lang.global.noData'
        ]
    ];
}
