<?php namespace Magiczne\JsonLd\Components;

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
            'actionStatus',
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
