<?php namespace Magiczne\JsonLd\Components;

class Person extends Thing
{
    public function componentDetails()
    {
        return [
            'name' => 'Person',
            'description' => 'https://schema.org/Person'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'additionalName',
            'address',
            'affiliation',
            'alumniOf',
            'award',
            'birthDate',
            'birthPlace',
            'brand',
            'children',
            'colleague',
            'contactPoint',
            'deathDate',
            'deathPlace',
            'duns',
            'email',
            'familyName',
            'faxNumber',
            'follows',
            'funder',
            'givenName',
            'globalLocationNumber',
            'hasOccupation',
            'hasOfferCatalog',
            'hasPOS',
            'height',
            'homeLocation',
            'honorificPrefix',
            'honorificSuffix',
            'interactionStatistic',
            'isicV4',
            'knows',
            'makesOffer',
            'memberOf',
            'naics',
            'nationality',
            'netWorth',
            'owns',
            'parent',
            'performerIn',
            'publishingPrinciples',
            'relatedTo',
            'seeks',
            'sibling',
            'sponsor',
            'spouse',
            'taxID',
            'telephone',
            'vatID',
            'weight',
            'workLocation',
            'worksFor'
        ], 'Person'));
    }
}
