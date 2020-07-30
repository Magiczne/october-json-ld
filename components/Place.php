<?php namespace Magiczne\JsonLd\Components;

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
            'isAccessibleForFree' => $this->dropdownBoolean,
            'isicV4',
            'latitude',
            'logo',
            'longitude',
            'maximumAttendeeCapacity',
            'openingHoursSpecification',
            'photo',
            'publicAccess' => $this->dropdownBoolean,
            'review',
            'slogan',
            'smokingAllowed' => $this->dropdownBoolean,
            'specialOpeningHoursSpecification',
            'telephone'
        ], 'Place'));
    }
}
