<?php namespace Magiczne\JsonLd\Components\Level1;

use Magiczne\JsonLd\Components\Thing;

class Organization extends Thing
{
    public function componentDetails()
    {
        return [
            'name' => 'Organization',
            'description' => 'https://schema.org/Organization'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
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
        ], 'Organization'));
    }
}
