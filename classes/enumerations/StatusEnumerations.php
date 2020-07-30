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

    /**
     * https://schema.org/EventStatusType
     */
    public static $eventStatusType = [
        'type' => 'dropdown',
        'default' => 'enum::no-data',
        'options' => [
            'https://schema.org/EventCancelled' => 'magiczne.jsonld::lang.enumerations.eventStatusType.cancelled',
            'https://schema.org/EventMovedOnline' => 'magiczne.jsonld::lang.enumerations.eventStatusType.movedOnline',
            'https://schema.org/EventPostponed' => 'magiczne.jsonld::lang.enumerations.eventStatusType.postponed',
            'https://schema.org/EventRescheduled' => 'magiczne.jsonld::lang.enumerations.eventStatusType.rescheduled',
            'https://schema.org/EventScheduled' => 'magiczne.jsonld::lang.enumerations.eventStatusType.scheduled',
            'enum::no-data' => 'magiczne.jsonld::lang.global.noData'
        ]
    ];
}
