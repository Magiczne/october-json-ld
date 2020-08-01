<?php namespace Magiczne\JsonLd\Components\Level2\Event;

use Magiczne\JsonLd\Components\Level1\Event;

class PublicationEvent extends Event
{
    public function componentDetails()
    {
        return [
            'name' => 'PublicationEvent',
            'description' => 'https://schema.org/PublicationEvent'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'publishedOn'
        ], 'PublicationEvent'));
    }
}
