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
        return array_merge(parent::defineProperties(), [
            'additionalProperty' => [
                'title' => 'magiczne.jsonld::lang.properties.additionalProperty',
                'group' => 'Place'
            ],
            'address' => [
                'title' => 'magiczne.jsonld::lang.properties.address',
                'group' => 'Place'
            ],
            'aggregateRating' => [
                'title' => 'magiczne.jsonld::lang.properties.aggregateRating',
                'group' => 'Place'
            ],
            'amenityFeature' => [
                'title' => 'magiczne.jsonld::lang.properties.amenityFeature',
                'group' => 'Place'
            ],
            'branchCode' => [
                'title' => 'magiczne.jsonld::lang.properties.branchCode',
                'group' => 'Place'
            ],
            'containedInPlace' => [
                'title' => 'magiczne.jsonld::lang.properties.containedInPlace',
                'group' => 'Place'
            ],
            'containsPlace' => [
                'title' => 'magiczne.jsonld::lang.properties.containsPlace',
                'group' => 'Place'
            ],
            'event' => [
                'title' => 'magiczne.jsonld::lang.properties.event',
                'group' => 'Place'
            ],
            'faxNumber' => [
                'title' => 'magiczne.jsonld::lang.properties.faxNumber',
                'group' => 'Place'
            ],
            'geo' => [
                'title' => 'magiczne.jsonld::lang.properties.geo',
                'group' => 'Place'
            ],
            'geoContains' => [
                'title' => 'magiczne.jsonld::lang.properties.geoContains',
                'group' => 'Place'
            ],
            'geoCoveredBy' => [
                'title' => 'magiczne.jsonld::lang.properties.geoCoveredBy',
                'group' => 'Place'
            ],
            'geoCovers' => [
                'title' => 'magiczne.jsonld::lang.properties.geoCovers',
                'group' => 'Place'
            ],
            'geoCrosses' => [
                'title' => 'magiczne.jsonld::lang.properties.geoCrosses',
                'group' => 'Place'
            ],
            'geoDisjoint' => [
                'title' => 'magiczne.jsonld::lang.properties.geoDisjoint',
                'group' => 'Place'
            ],
            'geoEquals' => [
                'title' => 'magiczne.jsonld::lang.properties.geoEquals',
                'group' => 'Place'
            ],
            'geoIntersects' => [
                'title' => 'magiczne.jsonld::lang.properties.geoIntersects',
                'group' => 'Place'
            ],
            'geoOverlaps' => [
                'title' => 'magiczne.jsonld::lang.properties.geoOverlaps',
                'group' => 'Place'
            ],
            'geoTouches' => [
                'title' => 'magiczne.jsonld::lang.properties.geoTouches',
                'group' => 'Place'
            ],
            'geoWithin' => [
                'title' => 'magiczne.jsonld::lang.properties.geoWithin',
                'group' => 'Place'
            ],
            'globalLocalizationNumber' => [
                'title' => 'magiczne.jsonld::lang.properties.globalLocalizationNumber',
                'group' => 'Place'
            ],
            'hasMap' => [
                'title' => 'magiczne.jsonld::lang.properties.hasMap',
                'group' => 'Place'
            ],
            'isAccessibleForFree' => array_merge($this->dropdownBoolean, [
                'title' => 'magiczne.jsonld::lang.properties.isAccessibleForFree',
                'group' => 'Place'
            ]),
            'isicV4' => [
                'title' => 'magiczne.jsonld::lang.properties.isicV4',
                'group' => 'Place'
            ],
            'latitude' => [
                'title' => 'magiczne.jsonld::lang.properties.latitude',
                'group' => 'Place'
            ],
            'logo' => [
                'title' => 'magiczne.jsonld::lang.properties.logo',
                'group' => 'Place'
            ],
            'longitude' => [
                'title' => 'magiczne.jsonld::lang.properties.longitude',
                'group' => 'Place'
            ],
            'maximumAttendeeCapacity' => [
                'title' => 'magiczne.jsonld::lang.properties.maximumAttendeeCapacity',
                'group' => 'Place'
            ],
            'openingHoursSpecification' => [
                'title' => 'magiczne.jsonld::lang.properties.openingHoursSpecification',
                'group' => 'Place'
            ],
            'photo' => [
                'title' => 'magiczne.jsonld::lang.properties.photo',
                'group' => 'Place'
            ],
            'publicAccess' => array_merge($this->dropdownBoolean, [
                'title' => 'magiczne.jsonld::lang.properties.publicAccess',
                'group' => 'Place'
            ]),
            'review' => [
                'title' => 'magiczne.jsonld::lang.properties.review',
                'group' => 'Place'
            ],
            'slogan' => [
                'title' => 'magiczne.jsonld::lang.properties.slogan',
                'group' => 'Place'
            ],
            'smokingAllowed' => array_merge($this->dropdownBoolean, [
                'title' => 'magiczne.jsonld::lang.properties.smokingAllowed',
                'group' => 'Place',
            ]),
            'specialOpeningHoursSpecification' => [
                'title' => 'magiczne.jsonld::lang.properties.specialOpeningHoursSpecification',
                'group' => 'Place'
            ],
            'telephone' => [
                'title' => 'magiczne.jsonld::lang.properties.telephone',
                'group' => 'Place'
            ],
        ]);
    }
}
