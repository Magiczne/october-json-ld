<?php

return [
    'plugin' => [
        'name' => 'JSON-LD Components',
        'description' => 'Use components to add JSON-LD data to your page.'
    ],
    'global' => [
        'yes' => 'Yes',
        'no' => 'No',
        'noData' => 'No data',
        'value' => 'Value'
    ],
    'enumerations' => [
        'actionStatusType' => [
            'active' => 'Active',
            'completed' => 'Completed',
            'failed' => 'Failed',
            'potential' => 'Potential'
        ],
        'contactPointOption' => [
            'hearingImpairedSupported' => 'Hearing impaired supported',
            'tollFree' => 'Toll free'
        ],
        'eventStatusType' => [
            'cancelled' => 'Cancelled',
            'movedOnline' => 'Moved online',
            'postponed' => 'Postponed',
            'rescheduled' => 'Rescheduled',
            'scheduled' => 'Scheduled'
        ],
        'offerItemCondition' => [
            'damagedCondition' => 'Damaged',
            'newCondition' => 'New',
            'refurbishedCondition' => 'Refurbished',
            'usedCondition' => 'Used'
        ],
        'physicalActivityCategory' => [
            'aerobicActivity' => 'Aerobic activity',
            'anaerobicActivity' => 'Anaerobic activity',
            'balance' => 'Balance',
            'flexibility' => 'Flexibility',
            'leisureTimeActivity' => 'Leisure time activity',
            'occupationalActivity' => 'Occupational activity',
            'strengthTraining' => 'Strength training'
        ]
    ],
    'properties' => [
        'about' => 'About',
        'accessMode' => 'Access mode',
        'accessModeSufficient' => 'Access mode sufficient',
        'accessibilityAPI' => 'Accessibility API',
        'accessibilityControl' => 'Accessibility control',
        'accessibilityFeature' => 'Accessibility feature',
        'accessibilityHazard' => 'Accessibility hazard',
        'accessibilitySummary' => 'Accessibility summary',
        'accountablePerson' => 'Accountable person',
        'actionApplication' => 'Action application',
        'actionPlatform' => 'Action platform',
        'actionStatus' => 'Action status',
        'actor' => 'Actor',
        'additionalName' => 'Additional name',
        'additionalProperty' => 'Additional property',
        'additionalType' => 'Additional type',
        'address' => 'Address',
        'addressCountry' => 'Address country',
        'addressLocality' => 'Address locality',
        'addressRegion' => 'Address region',
        'affiliation' => 'Affiliation',
        'agent' => 'Agent',
        'aggregateRating' => 'Aggregate rating',
        'alignmentType' => 'Alignment type',
        'alternateName' => 'Alternate name',
        'alternativeHeadline' => 'Alternative headline',
        'alumni' => 'Alumni',
        'alumniOf' => 'Alumni of',
        'amenityFeature' => 'Amenity feature',
        'areaServed' => 'Area served',
        'associatedArticle' => 'Associated article',
        'associatedMedia' => 'Associated media',
        'attendee' => 'Attendee',
        'audience' => 'Audience',
        'availableLanguage' => 'Available language',
        'award' => 'Award',
        'audio' => 'Audio',
        'author' => 'Author',

        'birthDate' => 'Birth date',
        'birthPlace' => 'Birth place',
        'bitrate' => 'Bitrate',
        'branchCode' => 'Branch code',
        'brand' => 'Brand',

        'caption' => 'Caption',
        'category' => 'Category',
        'character' => 'Character',
        'children' => 'Children',
        'citation' => 'Citation',
        'code' => 'Code',
        'colleague' => 'Colleague',
        'color' => 'Color',
        'comment' => 'Comment',
        'commentCount' => 'Comment count',
        'composer' => 'Composer',
        'contactOption' => 'Contact option',
        'contactPoint' => 'Contact point',
        'contactType' => 'Contact type',
        'contentLocation' => 'Content location',
        'contentRating' => 'Content rating',
        'contentSize' => 'Content size',
        'contentType' => 'Content type',
        'contentUrl' => 'Content URL',
        'containedInPlace' => 'Contained in place',
        'containsPlace' => 'Contains place',
        'contributor' => 'Contributor',
        'copyrightHolder' => 'Copyright holder',
        'copyrightYear' => 'Copyright year',
        'creator' => 'Creator',

        'dateCreated' => 'Date created',
        'dateModified' => 'Date modified',
        'datePublished' => 'Date published',
        'deathDate' => 'Death date',
        'deathPlace' => 'Death place',
        'department' => 'Department',
        'depth' => 'Depth',
        'description' => 'Description',
        'director' => 'Director',
        'disambiguatingDescription' => 'Disambiguating description',
        'discussionUrl' => 'Discussion URL',
        'dissolutionDate' => 'Dissolution date',
        'doorTime' => 'Door time',
        'duns' => 'The Dun & Bradstreet DUNS number',
        'duration' => 'Duration',

        'editor' => 'Editor',
        'educationalAlignment' => 'Educational alignment',
        'educationalFramework' => 'Educational framework',
        'educationalUse' => 'Educational use',
        'embedUrl' => 'Embed URL',
        'email' => 'Email',
        'employee' => 'Employee',
        'encodesCreativeWork' => 'Encodes creative work',
        'encoding' => 'Encoding',
        'encodingFormat' => 'Encoding format',
        'encodingType' => 'Encoding type',
        'endDate' => 'End date',
        'endTime' => 'End time',
        'error' => 'Error',
        'event' => 'Event',
        'eventStatus' => 'Event status',
        'exampleOfWork' => 'Example of work',
        'exifData' => 'EXIF data',
        'expires' => 'Expires',

        'familyName' => 'Family name',
        'faxNumber' => 'Fax number',
        'follows' => 'Follows',
        'founder' => 'Founder',
        'foundingDate' => 'Founding date',
        'foundingLocation' => 'Founding location',
        'funder' => 'Funder',

        'genre' => 'Genre',
        'geo' => 'Geo',
        'geoContains' => 'Geo contains',
        'geoCoveredBy' => 'Geo covered by',
        'geoCovers' => 'Geo covers',
        'geoCrosses' => 'Geo crosses',
        'geoDisjoint' => 'Geo disjoint',
        'geoEquals' => 'Geo equals',
        'geoIntersects' => 'Geo intersects',
        'geoOverlaps' => 'Geo overlaps',
        'geoTouches' => 'Geo touches',
        'geoWithin' => 'Geo within',
        'givenName' => 'Given name',
        'globalLocalizationNumber' => 'Global localization number',
        'globalLocationNumber' => 'Global location number',
        'gtin12' => 'GTIN-12',
        'gtin13' => 'GTIN-13',
        'gtin14' => 'GTIN-14',
        'gtin8' => 'GTIN-8',
        'guideline' => 'Guideline',

        'hasMap' => 'Has map',
        'hasOccupation' => 'Has occupation',
        'hasOfferCatalog' => 'Has offer catalog',
        'hasPart' => 'Has part',
        'hasPOS' => 'Has Point-of-sales',
        'headline' => 'Headline',
        'height' => 'Height',
        'homeLocation' => 'Home location',
        'honorificPrefix' => 'Honorific prefix',
        'honorificSuffix' => 'Honoric suffix',
        'hoursAvailable' => 'Hours available',
        'httpMethod' => 'HTTP Method',

        'identifier' => 'Identifier',
        'image' => 'Image',
        'inLanguage' => 'In language',
        'instrument' => 'Instrument',
        'interactionStatistic' => 'Interaction statistic',
        'interactivityType' => 'Interactivity type',
        'isAccessibleForFree' => 'Is accessible for free',
        'isAccessoryOrSparePartFor' => 'Is accessory or spare part for',
        'isBasedOn' => 'Is based on',
        'isConsumableFor' => 'Is consumable for',
        'isFamilyFriendly' => 'Is family friendly',
        'isicV4' => 'ISIC Resivion 4',
        'isPartOf' => 'Is part of',
        'isRelatedTo' => 'Is related to',
        'isSimilarTo' => 'Is similar to',
        'isVariantOf' => 'Is variant of',
        'itemCondition' => 'Item condition',

        'keywords' => 'Keywords',
        'knows' => 'Knows',

        'latitude' => 'Latitude',
        'learningResourceType' => 'Learning resource type',
        'legalName' => 'Legal name',
        'legalStatus' => 'Legal status',
        'leiCode' => 'LEI code',
        'license' => 'License',
        'location' => 'Location',
        'locationCreated' => 'Location created',
        'logo' => 'Logo',
        'longitude' => 'Longitude',

        'mainEntity' => 'Main entity',
        'mainEntityOfPage' => 'Main entity of page',
        'makesOffer' => 'Makes offer',
        'manufacturer' => 'Manufacturer',
        'material' => 'Material',
        'maximumAttendeeCapacity' => 'Maximum attendee capacity',
        'maxValue' => 'Max value',
        'medicineSystem' => 'Medicine system',
        'member' => 'Member',
        'memberOf' => 'Member of',
        'mentions' => 'Mentions',
        'minValue' => 'Min value',
        'model' => 'Model',
        'mpn' => 'MPN',
        'musicBy' => 'Music by',

        'naics' => 'NAICS Code',
        'name' => 'Name',
        'nationality' => 'Nationality',
        'netWorth' => 'Net worth',
        'numberOfEmployees' => 'Number of employees',

        'object' => 'Object',
        'offers' => 'Offers',
        'openingHoursSpecification' => 'Opening hours specification',
        'organizer' => 'Organizer',
        'owns' => 'Owns',

        'parent' => 'Parent',
        'parentOrganization' => 'Parent organization',
        'participant' => 'Participant',
        'performer' => 'Performer',
        'performerIn' => 'Performer in',
        'photo' => 'Photo',
        'playerType' => 'Player type',
        'position' => 'Position',
        'postalCode' => 'Postal code',
        'postOfficeBoxNumber' => 'Post office box number',
        'potentialAction' => 'Potential action',
        'previousStartDate' => 'Previous start date',
        'producer' => 'Producer',
        'productID' => 'Product ID',
        'productSupported' => 'Product supported',
        'productionDate' => 'Production date',
        'productionCompany' => 'Production company',
        'propertyID' => 'Property ID',
        'provider' => 'Provider',
        'publicAccess' => 'Public access',
        'publication' => 'Publication',
        'publisher' => 'Publisher',
        'publishingPrinciples' => 'Publishing principles',
        'purchaseDate' => 'Purchase date',

        'recognizedAuthority' => 'Recognized authority',
        'recordedAt' => 'Recorded at',
        'recordedIn' => 'Recorded in',
        'regionsAllowed' => 'Regions allowed',
        'relatedTo' => 'Related to',
        'releaseDate' => 'Release date',
        'releasedEvent' => 'Released event',
        'relevantSpecialty' => 'Relevant specialty',
        'remainingAttendeeCapacity' => 'Remaining attendee capacity',
        'representativeOfPage' => 'Representative of page',
        'requiresSubscription' => 'Required subscription',
        'result' => 'Result',
        'review' => 'Review',

        'sameAs' => 'Same as',
        'schemaVersion' => 'Schema version',
        'seeks' => 'Seeks',
        'sibling' => 'Sibling',
        'sku' => 'SKU',
        'slogan' => 'Slogan',
        'smokingAllowed' => 'Smoking allowed',
        'sourceOrganization' => 'Source organization',
        'spatial' => 'Spatial',
        'spatialCoverage' => 'Spatial coverage',
        'specialOpeningHoursSpecification' => 'Special opening hours specification',
        'sponsor' => 'Sponsor',
        'spouse' => 'Spouse',
        'startDate' => 'Start date',
        'startTime' => 'Start time',
        'streetAddress' => 'Street address',
        'study' => 'Study',
        'subEvent' => 'Sub event',
        'subOrganization' => 'Sub organization',
        'subjectOf' => 'Subject of',
        'superEvent' => 'Super event',

        'target' => 'Target',
        'targetDescription' => 'Target description',
        'targetName' => 'Target name',
        'targetUrl' => 'Target url',
        'taxID' => 'The Tax / Fiscal ID',
        'telephone' => 'Telephone',
        'temporal' => 'Temporal',
        'temporalCoverage' => 'Temporal coverage',
        'text' => 'Text',
        'thumbnail' => 'Thumbnail',
        'thumbnailUrl' => 'Thumbnail URL',
        'timeRequired' => 'Time required',
        'transcript' => 'Transcript',
        'translator' => 'Translator',
        'typicalAgeRange' => 'Typical age range',

        'unitCode' => 'Unit code',
        'unitText' => 'Unit text',
        'uploadDate' => 'Upload date',
        'url' => 'URL',
        'urlTemplate' => 'URL template',

        'value' => 'Value',
        'valueReference' => 'Value reference',
        'vatID' => 'The Value-added Tax ID',
        'version' => 'Version',
        'video' => 'Video',
        'videoFrameSize' => 'Video frame size',
        'videoQuality' => 'Video quality',

        'weight' => 'Weight',
        'width' => 'Width',
        'workExample' => 'Work example',
        'workFeatured' => 'Work featured',
        'workLocation' => 'Work location',
        'workPerformed' => 'Work performed',
        'worksFor' => 'Works for'
    ]
];
