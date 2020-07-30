<?php namespace Magiczne\JsonLd\Components;

class Event extends Thing
{
    public function componentDetails()
    {
        return [
            'name' => 'Event',
            'description' => 'https://schema.org/Event'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'about',
            'actor',
            'aggregateRating',
            'attendee',
            'audience',
            'composer',
            'contributor',
            'director',
            'doorTime',
            'duration',
            'endDate',
            'eventStatus',
            'funder',
            'inLanguage',
            'isAccessibleForFree',
            'location',
            'maximumAttendeeCapacity',
            'offers',
            'organizer',
            'performer',
            'previousStartDate',
            'recordedIn',
            'remainingAttendeeCapacity',
            'review',
            'sponsor',
            'startDate',
            'subEvent',
            'superEvent',
            'translator',
            'typicalAgeRange',
            'workFeatured',
            'workPerformed'
        ], 'Event'));
    }
}
