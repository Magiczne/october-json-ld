<?php namespace Magiczne\JsonLd\Components\Level1;

use Magiczne\JsonLd\Classes\Enumerations\StatusEnumerations;
use Magiczne\JsonLd\Components\Thing;

class Action extends Thing
{
    public function componentDetails()
    {
        return [
            'name' => 'Action',
            'description' => 'https://schema.org/Action'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'actionStatus' => StatusEnumerations::$actionStatusType,
            'agent',
            'endTime',
            'error',
            'instrument',
            'location',
            'object',
            'participant',
            'result',
            'startTime',
            'target'
        ], 'Action'));
    }
}
