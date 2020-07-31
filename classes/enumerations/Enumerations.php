<?php namespace Magiczne\JsonLd\Classes\Enumerations;

class Enumerations
{
    /**
     * https://schema.org/OfferItemCondition
     */
    public static $offerItemCondition = [
        'type' => 'dropdown',
        'default' => 'enum::no-data',
        'options' => [
            'https://schema.org/DamagedCondition' => 'magiczne.jsonld::lang.enumerations.offerItemCondition.damagedCondition',
            'https://schema.org/NewCondition' => 'magiczne.jsonld::lang.enumerations.offerItemCondition.newCondition',
            'https://schema.org/RefurbishedCondition' => 'magiczne.jsonld::lang.enumerations.offerItemCondition.refurbishedCondition',
            'https://schema.org/UsedCondition' => 'magiczne.jsonld::lang.enumerations.offerItemCondition.usedCondition',
            'enum::no-data' => 'magiczne.jsonld::lang.global.noData'
        ]
    ];

    /*
     * https://schema.org/PhysicalActivityCategory
     */
    public static $physicalActivityCategory = [
        'type' => 'dropdown',
        'default' => 'enum::no-data',
        'options' => [
            'https://schema.org/AerobicActivity' => 'magiczne.jsonld::lang.enumerations.physicalActivityCategory.aerobicActivity',
            'https://schema.org/AnaerobicActivity' => 'magiczne.jsonld::lang.enumerations.physicalActivityCategory.anaerobicActivity',
            'https://schema.org/Balance' => 'magiczne.jsonld::lang.enumerations.physicalActivityCategory.balance',
            'https://schema.org/Flexibility' => 'magiczne.jsonld::lang.enumerations.physicalActivityCategory.flexibility',
            'https://schema.org/LeisureTimeActivity' => 'magiczne.jsonld::lang.enumerations.physicalActivityCategory.leisureTimeActivity',
            'https://schema.org/OccupationalActivity' => 'magiczne.jsonld::lang.enumerations.physicalActivityCategory.occupationalActivity',
            'https://schema.org/StrengthTraining' => 'magiczne.jsonld::lang.enumerations.physicalActivityCategory.strengthTraining',
            'enum::no-data' => 'magiczne.jsonld::lang.global.noData'
        ]
    ];
}
