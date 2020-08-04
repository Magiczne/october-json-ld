<?php namespace Magiczne\JsonLd\Components\Level1;

use Magiczne\JsonLd\Components\Thing;

class Organization extends Thing
{
    /**
     * Properties existing on Organization schema.
     *
     * Since for example EducationalOrganization is and Organization and a Place as well,
     * there is a need to store it as a static property in order for other classes to use it.
     */
    public static $rawProperties = [
        'address',
        'aggregateRating',
        'alumni',
        'areaServed',
        'award',
        'brand',
        'contactPoint',
        'department',
        'dissolutionDate',
        'duns',
        'email',
        'employee',
        'event',
        'faxNumber',
        'founder',
        'foundingDate',
        'foundingLocation',
        'funder',
        'globalLocationNumber',
        'hasOfferCatalog',
        'hasPOS',
        'interactionStatistic',
        'isicV4',
        'legalName',
        'leiCode',
        'location',
        'logo',
        'makesOffer',
        'member',
        'memberOf',
        'naics',
        'numberOfEmployees',
        'owns',
        'parentOrganization',
        'publishingPrinciples',
        'review',
        'seeks',
        'slogan',
        'sponsor',
        'subOrganization',
        'taxID',
        'telephone',
        'vatID'
    ];

    public function componentDetails()
    {
        return [
            'name' => 'Organization',
            'description' => 'https://schema.org/Organization'
        ];
    }

    public function defineProperties()
    {
        $generatedProperties = $this->generateProperties(self::$rawProperties, 'Organization');

        return array_merge(parent::defineProperties(), $generatedProperties);
    }
}
