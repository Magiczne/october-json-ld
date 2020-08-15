<?php namespace Magiczne\JsonLd\Classes;

class CommonFields
{
    /**
     * No data constant
     */
    const BOOLEAN_NO_DATA = 'boolean::no-data';

    /**
     * https://schema.org/Boolean
     */
    public static $boolean = [
        'type' => 'dropdown',
        'default' => self::BOOLEAN_NO_DATA,
        'options' => [
            'https://schema.org/True' => 'magiczne.jsonld::lang.global.yes',
            'https://schema.org/False' => 'magiczne.jsonld::lang.global.no',
            self::BOOLEAN_NO_DATA => 'magiczne.jsonld::lang.global.noData'
        ]
    ];
}
