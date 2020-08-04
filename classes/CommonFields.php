<?php namespace Magiczne\JsonLd\Classes;

class CommonFields
{
    public static $boolean = [
        'type' => 'dropdown',
        'default' => 'boolean::no-data',
        'options' => [
            'https://schema.org/True' => 'magiczne.jsonld::lang.global.yes',
            'https://schema.org/False' => 'magiczne.jsonld::lang.global.no',
            'boolean::no-data' => 'magiczne.jsonld::lang.global.noData'
        ]
    ];
}
