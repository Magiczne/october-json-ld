<?php namespace Magiczne\JsonLd\Components\Level1;

use Magiczne\JsonLd\Classes\CommonFields;
use Magiczne\JsonLd\Components\Thing;

class CreativeWork extends Thing
{
    public function componentDetails()
    {
        return [
            'name' => 'CreativeWork',
            'description' => 'https://schema.org/CreativeWork'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'about',
            'accessMode',
            'accessModeSufficient',
            'accessibilityAPI',
            'accessibilityControl',
            'accessibilityFeature',
            'accessibilityHazard',
            'accessibilitySummary',
            'accountablePerson',
            'aggregateRating',
            'alternativeHeadline',
            'associatedMedia',
            'audience',
            'audio',
            'author',
            'award',
            'character',
            'citation',
            'comment',
            'commentCount',
            'contentLocation',
            'contentRating',
            'contributor',
            'copyrightHolder',
            'copyrightYear',
            'creator',
            'dateCreated',
            'dateModified',
            'datePublished',
            'discussionUrl',
            'editor',
            'educationalAlignment',
            'educationalUse',
            'encoding',
            'encodingFormat',
            'exampleOfWork',
            'expires',
            'funder',
            'genre',
            'hasPart',
            'headline',
            'inLanguage',
            'interactionStatistic',
            'interactivityType',
            'isAccessibleForFree' => CommonFields::$boolean,
            'isBasedOn',
            'isFamilyFriendly' => CommonFields::$boolean,
            'isPartOf',
            'keywords',
            'learningResourceType',
            'license',
            'locationCreated',
            'mainEntity',
            'material',
            'mentions',
            'offers',
            'position',
            'producer',
            'provider',
            'publication',
            'publisher',
            'publishingPrinciples',
            'recordedAt',
            'releasedEvent',
            'review',
            'schemaVersion',
            'sourceOrganization',
            'spatial',
            'spatialCoverage',
            'sponsor',
            'temporal',
            'temporalCoverage',
            'text',
            'thumbnailUrl',
            'timeRequired',
            'translator',
            'typicalAgeRange',
            'version',
            'video',
            'workExample'
        ], 'CreativeWork'));
    }
}
