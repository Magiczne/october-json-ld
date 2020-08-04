<?php namespace Magiczne\JsonLd\Components\Level1;

use Magiczne\JsonLd\Classes\CommonFields;
use Magiczne\JsonLd\Components\Thing;

class Place extends Thing
{
    public function componentDetails()
    {
        return [
            'name' => 'Place',
            'description' => 'https://schema.org/Place'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'additionalProperty',
            'address',
            'aggregateRating',
            'amenityFeature',
            'branchCode',
            'containedInPlace',
            'containsPlace',
            'event',
            'faxNumber',
            'geo',
            'geoContains',
            'geoCoveredBy',
            'geoCovers',
            'geoCrosses',
            'geoDisjoint',
            'geoEquals',
            'geoIntersects',
            'geoOverlaps',
            'geoTouches',
            'geoWithin',
            'globalLocalizationNumber',
            'hasMap',
            'isAccessibleForFree' => CommonFields::$boolean,
            'isicV4',
            'latitude',
            'logo',
            'longitude',
            'maximumAttendeeCapacity',
            'openingHoursSpecification',
            'photo',
            'publicAccess' => CommonFields::$boolean,
            'review',
            'slogan',
            'smokingAllowed' => CommonFields::$boolean,
            'specialOpeningHoursSpecification',
            'telephone'
        ], 'Place'));
    }
}
