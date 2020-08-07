<?php

return [
    'plugin' => [
        'name' => 'JSON-LD Components',
        'description' => 'Use components to add JSON-LD data to your page.',
    ],
    'permissions' => [
        'settings' => 'Manage JSON-LD rendering settings'
    ],
    'settings' => [
        'description' => 'Manage JSON-LD settings',
        'fields' => [
            'pretty_print' => [
                'label' => 'Pretty print JSON',
                'comment' => 'Display formatted JSON instead of minified'
            ]
        ],
        'tabs' => [
            'general' => 'General'
        ]
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
        'dayOfWeek' => [
            'friday' => 'Friday',
            'monday' => 'Monday',
            'publicHolidays' => 'Public holidays',
            'saturday' => 'Saturday',
            'sunday' => 'Sunday',
            'thursday' => 'Thursday',
            'tuesday' => 'Tuesday',
            'wednesday' => 'Wednesday'
        ],
        'eventStatusType' => [
            'cancelled' => 'Cancelled',
            'movedOnline' => 'Moved online',
            'postponed' => 'Postponed',
            'rescheduled' => 'Rescheduled',
            'scheduled' => 'Scheduled'
        ],
        'itemListOrderType' => [
            'itemListOrderAscending' => 'Ascending',
            'itemListOrderDescending' => 'Descending',
            'itemListUnordered' => 'Unordered'
        ],
        'mapCategoryType' => [
            'parkingMap' => 'Parking map',
            'seatingMap' => 'Seating map',
            'transitMap' => 'Transit map',
            'venueMap' => 'Venue map'
        ],
        'medicalAudienceType' => [
            'clinician' => 'Clinician',
            'medicalResearcher' => 'Medical researcher'
        ],
        'medicalEvidenceLevel' => [
            'evidenceLevelA' => 'Level A',
            'evidenceLevelB' => 'Level B',
            'evidenceLevelC' => 'Level C'
        ],
        'medicalStudyStatus' => [
            'activeNotRecruiting' => 'Active not recruiting',
            'completed' => 'Completed',
            'enrollingByInvitation' => 'Enrolling by invitation',
            'notYetRecruiting' => 'Not yet recruiting',
            'recruiting' => 'Recruiting',
            'resultsAvailable' => 'Results available',
            'resultsNotAvailable' => 'Results not available',
            'suspended' => 'Suspended',
            'terminated' => 'Terminated',
            'withdrawn' => 'Withdrawn'
        ],
        'medicineSystem' => [
            'ayurvedic' => 'Ayurvedic',
            'chiropractic' => 'Chiropractic',
            'homeopathic' => 'Homeopathic',
            'osteopathic' => 'Osteopathic',
            'traditionalChinese' => 'Traditional chinese',
            'westernConventional' => 'Western conventional'
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
        'acceptedAnswer' => 'Accepted answer',
        'acceptedPaymentMethod' => 'Accepted payment method',
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
        'acquiredForm' => 'Acquired form',
        'additionalName' => 'Additional name',
        'additionalProperty' => 'Additional property',
        'additionalType' => 'Additional type',
        'addOn' => 'Add on',
        'address' => 'Address',
        'addressCountry' => 'Address country',
        'addressLocality' => 'Address locality',
        'addressRegion' => 'Address region',
        'advanceBookingRequirement' => 'Advance booking requirement',
        'affiliation' => 'Affiliation',
        'agent' => 'Agent',
        'aggregateRating' => 'Aggregate rating',
        'album' => 'Album',
        'alignmentType' => 'Alignment type',
        'alternateName' => 'Alternate name',
        'alternativeHeadline' => 'Alternative headline',
        'alumni' => 'Alumni',
        'alumniOf' => 'Alumni of',
        'amenityFeature' => 'Amenity feature',
        'answerCount' => 'Answer count',
        'applicableLocation' => 'Applicable location',
        'applicationCategory' => 'Application category',
        'applicationSubCategory' => 'Application sub category',
        'applicationSuite' => 'Application suite',
        'areaServed' => 'Area served',
        'associatedAnatomy' => 'Associated anatomy',
        'associatedArticle' => 'Associated article',
        'associatedMedia' => 'Associated media',
        'attendee' => 'Attendee',
        'audience' => 'Audience',
        'availableOnDevice' => 'Available on device',
        'availability' => 'Availability',
        'availabilityEnds' => 'Availability ends',
        'availabilityStarts' => 'Availability starts',
        'availabilityAtOrFrom' => 'Availability at or from',
        'availabilityDeliveryMethod' => 'Availability delivery method',
        'availableChannel' => 'Available channel',
        'availableLanguage' => 'Available language',
        'award' => 'Award',
        'audienceType' => 'Audience type',
        'audio' => 'Audio',
        'author' => 'Author',

        'bestRating' => 'Best rating',
        'birthDate' => 'Birth date',
        'birthPlace' => 'Birth place',
        'bitrate' => 'Bitrate',
        'box' => 'Box',
        'branchCode' => 'Branch code',
        'brand' => 'Brand',
        'breadcrumb' => 'Breadcrumb',
        'broadcastAffiliateOf' => 'Broadcast affiliate of',
        'broadcastDisplayName' => 'Broadcast display name',
        'broadcastFrequency' => 'Broadcast frequency',
        'broadcastFrequencyValue' => 'Broadcast frequency value',
        'broadcastTimezone' => 'Broadcast timezone',
        'broadcaster' => 'Broadcaster',
        'broker' => 'Broker',
        'businessFunction' => 'Business function',
        'byArtist' => 'By artist',

        'caption' => 'Caption',
        'category' => 'Category',
        'character' => 'Character',
        'children' => 'Children',
        'circle' => 'Circle',
        'citation' => 'Citation',
        'clipNumber' => 'Clip number',
        'closes' => 'Closes',
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
        'countriesNotSupported' => 'Countries not supported',
        'countriesSupported' => 'Countries supported',
        'creator' => 'Creator',
        'cssSelector' => 'CSS Selector',
        'currency' => 'Currency',

        'dataset' => 'Dataset',
        'dataFeedElement' => 'Data feed element',
        'dateCreated' => 'Date created',
        'dateDeleted' => 'Date deleted',
        'dateModified' => 'Date modified',
        'datePublished' => 'Date published',
        'dayOfWeek' => 'Day of week',
        'deathDate' => 'Death date',
        'deathPlace' => 'Death place',
        'deliveryLeadTime' => 'Delivery lead time',
        'department' => 'Department',
        'depth' => 'Depth',
        'description' => 'Description',
        'differentialDiagnosis' => 'Differential diagnosis',
        'director' => 'Director',
        'disambiguatingDescription' => 'Disambiguating description',
        'discussionUrl' => 'Discussion URL',
        'dissolutionDate' => 'Dissolution date',
        'distribution' => 'Distribution',
        'doorTime' => 'Door time',
        'downloadUrl' => 'Download URL',
        'downvoteCount' => 'Downvote count',
        'drug' => 'Drug',
        'duns' => 'The Dun & Bradstreet DUNS number',
        'duration' => 'Duration',

        'editor' => 'Editor',
        'educationalAlignment' => 'Educational alignment',
        'educationalFramework' => 'Educational framework',
        'educationalUse' => 'Educational use',
        'elevation' => 'Elevation',
        'eligibleCustomerType' => 'Eligible customer type',
        'eligibleDuration' => 'Eligible duration',
        'eligibleQuantity' => 'Eligible quantity',
        'eligibleRegion' => 'Eligible region',
        'eligibleTransactionVolume' => 'Eligible transaction volume',
        'embedUrl' => 'Embed URL',
        'email' => 'Email',
        'employee' => 'Employee',
        'encodesCreativeWork' => 'Encodes creative work',
        'encoding' => 'Encoding',
        'encodingFormat' => 'Encoding format',
        'encodingType' => 'Encoding type',
        'endDate' => 'End date',
        'endTime' => 'End time',
        'epidemiology' => 'Epidemiology',
        'episode' => 'Episode',
        'episodeNumber' => 'Episode number',
        'error' => 'Error',
        'estimatedSalary' => 'Estimated salary',
        'event' => 'Event',
        'eventStatus' => 'Event status',
        'evidenceLevel' => 'Evidence level',
        'evidenceOrigin' => 'Evidence origin',
        'exampleOfWork' => 'Example of work',
        'exifData' => 'EXIF data',
        'expectedPrognosis' => 'Expected prognosis',
        'experienceRequirements' => 'Experience requiremets',
        'expires' => 'Expires',

        'familyName' => 'Family name',
        'faxNumber' => 'Fax number',
        'featureList' => 'Feature list',
        'fileSize' => 'File size',
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
        'geographicArea' => 'Geographic area',
        'givenName' => 'Given name',
        'globalLocalizationNumber' => 'Global localization number',
        'globalLocationNumber' => 'Global location number',
        'gtin12' => 'GTIN-12',
        'gtin13' => 'GTIN-13',
        'gtin14' => 'GTIN-14',
        'gtin8' => 'GTIN-8',
        'guideline' => 'Guideline',
        'guidelineDate' => 'Guideline date',
        'guidelineSubject' => 'Guideline subject',

        'hasBroadcastChannel' => 'Has broadcast channel',
        'hasMap' => 'Has map',
        'hasOccupation' => 'Has occupation',
        'hasOfferCatalog' => 'Has offer catalog',
        'hasPart' => 'Has part',
        'hasPOS' => 'Has Point-of-sales',
        'headline' => 'Headline',
        'healthCondition' => 'Health condition',
        'height' => 'Height',
        'homeLocation' => 'Home location',
        'honorificPrefix' => 'Honorific prefix',
        'honorificSuffix' => 'Honoric suffix',
        'hostingOrganization' => 'Hosting organization',
        'hoursAvailable' => 'Hours available',
        'httpMethod' => 'HTTP Method',

        'identifier' => 'Identifier',
        'image' => 'Image',
        'inAlbum' => 'In album',
        'inLanguage' => 'In language',
        'inPlaylist' => 'In playlist',
        'includedInDataCatalog' => 'Included in data catalog',
        'includesObject' => 'Included object',
        'installUrl' => 'Install URL',
        'instrument' => 'Instrument',
        'interactionService' => 'Interaction service',
        'interactionStatistic' => 'Interaction statistic',
        'interactionType' => 'Interaction type',
        'interactivityType' => 'Interactivity type',
        'inventoryLevel' => 'Inventory level',
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
        'isrcCode' => 'International Standard Recording Code',
        'issn' => 'ISSN',
        'item' => 'Item',
        'itemCondition' => 'Item condition',
        'itemListElement' => 'Item list element',
        'itemListOrder' => 'Item list order',
        'itemOffered' => 'Item offered',
        'itemReviewed' => 'Item reviewed',

        'keywords' => 'Keywords',
        'knows' => 'Knows',

        'latitude' => 'Latitude',
        'lastReviewed' => 'Last reviewed',
        'learningResourceType' => 'Learning resource type',
        'legalName' => 'Legal name',
        'legalStatus' => 'Legal status',
        'leiCode' => 'LEI code',
        'license' => 'License',
        'line' => 'Line',
        'location' => 'Location',
        'locationCreated' => 'Location created',
        'logo' => 'Logo',
        'longitude' => 'Longitude',

        'mainContentOfPage' => 'Main content of page',
        'mainEntity' => 'Main entity',
        'mainEntityOfPage' => 'Main entity of page',
        'makesOffer' => 'Makes offer',
        'manufacturer' => 'Manufacturer',
        'mapType' => 'Map type',
        'material' => 'Material',
        'maximumAttendeeCapacity' => 'Maximum attendee capacity',
        'maxPrice' => 'Max price',
        'maxValue' => 'Max value',
        'median' => 'Median',
        'medicalAudience' => 'Medical audience',
        'medicineSystem' => 'Medicine system',
        'member' => 'Member',
        'memberOf' => 'Member of',
        'membershipNumber' => 'Membership number',
        'memoryRequirements' => 'Memory requirements',
        'mentions' => 'Mentions',
        'minPrice' => 'Min price',
        'minValue' => 'Min value',
        'model' => 'Model',
        'mpn' => 'MPN',
        'musicBy' => 'Music by',

        'naics' => 'NAICS Code',
        'name' => 'Name',
        'nationality' => 'Nationality',
        'naturalProgression' => 'Natural progression',
        'netWorth' => 'Net worth',
        'nextItem' => 'Next item',
        'numberOfEmployees' => 'Number of employees',
        'numberOfEpisodes' => 'Number of episodes',
        'numberOfItems' => 'Number of items',

        'object' => 'Object',
        'occupationLocation' => 'Occupation location',
        'offeredBy' => 'Offered by',
        'offers' => 'Offers',
        'openingHours' => 'Opening hours',
        'openingHoursSpecification' => 'Opening hours specification',
        'opens' => 'Opens',
        'operatingSystem' => 'Operating system',
        'organizer' => 'Organizer',
        'ownedForm' => 'Owned form',
        'ownedThrough' => 'Owned through',
        'owns' => 'Owns',

        'parent' => 'Parent',
        'parentItem' => 'Parent item',
        'parentOrganization' => 'Parent organization',
        'parentService' => 'Parent service',
        'participant' => 'Participant',
        'partOfEpisode' => 'Part of episode',
        'partOfSeason' => 'Part of season',
        'partOfSeries' => 'Part of series',
        'pathophysiology' => 'Pathophysiology',
        'performer' => 'Performer',
        'performerIn' => 'Performer in',
        'percentile10' => 'The 10th percentile value',
        'percentile25' => 'The 25th percentile value',
        'percentile75' => 'The 75th percentile value',
        'percentile90' => 'The 90th percentile value',
        'permissions' => 'Permissions',
        'photo' => 'Photo',
        'playerType' => 'Player type',
        'polygon' => 'Polygon',
        'position' => 'Position',
        'possibleComplication' => 'Possible complication',
        'possibleTreatment' => 'Possible treatment',
        'postalCode' => 'Postal code',
        'postOfficeBoxNumber' => 'Post office box number',
        'potentialAction' => 'Potential action',
        'predecessorOf' => 'Predecessor of',
        'previousItem' => 'Previous item',
        'previousStartDate' => 'Previous start date',
        'price' => 'Price',
        'priceCurrency' => 'Price currency',
        'priceSpecification' => 'Price specification',
        'priceValidUntil' => 'Price valid until',
        'primaryImageOfPage' => 'Primary image of page',
        'primaryPrevention' => 'Primary prevention',
        'processingTime' => 'Processing time',
        'processorRequirements' => 'Processor requirements',
        'producer' => 'Producer',
        'productID' => 'Product ID',
        'productSupported' => 'Product supported',
        'productionDate' => 'Production date',
        'productionCompany' => 'Production company',
        'programName' => 'Program name',
        'propertyID' => 'Property ID',
        'provider' => 'Provider',
        'providerMobility' => 'Provider mobility',
        'providesService' => 'Provides service',
        'publicAccess' => 'Public access',
        'publication' => 'Publication',
        'publishedOn' => 'Published on',
        'publisher' => 'Publisher',
        'publishingPrinciples' => 'Publishing principles',
        'purchaseDate' => 'Purchase date',

        'ratingCount' => 'Rating count',
        'ratingValue' => 'Rating value',
        'recognizedAuthority' => 'Recognized authority',
        'recordedAt' => 'Recorded at',
        'recordedIn' => 'Recorded in',
        'recordingOf' => 'Recording of',
        'regionsAllowed' => 'Regions allowed',
        'relatedLink' => 'Related link',
        'relatedTo' => 'Related to',
        'releaseDate' => 'Release date',
        'releaseNotes' => 'Release notes',
        'releasedEvent' => 'Released event',
        'relevantSpecialty' => 'Relevant specialty',
        'remainingAttendeeCapacity' => 'Remaining attendee capacity',
        'representativeOfPage' => 'Representative of page',
        'requiredGender' => 'Required gender',
        'requiredMaxAge' => 'Required max age',
        'requiredMinAge' => 'Required min age',
        'requiresSubscription' => 'Required subscription',
        'responsibilities' => 'Responsibilities',
        'result' => 'Result',
        'review' => 'Review',
        'reviewAspect' => 'Review aspect',
        'reviewBody' => 'Review body',
        'reviewCount' => 'Review count',
        'reviewRating' => 'Review rating',
        'reviewedBy' => 'Reviewed by',
        'riskFactor' => 'Risk factor',

        'sameAs' => 'Same as',
        'schemaVersion' => 'Schema version',
        'screenshot' => 'Screenshot',
        'seasonNumber' => 'Season number',
        'secondaryPrevention' => 'Secondary prevention',
        'seeks' => 'Seeks',
        'seller' => 'Seller',
        'serialNumber' => 'Serial number',
        'serviceLocation' => 'Service location',
        'serviceOutput' => 'Service output',
        'servicePhone' => 'Service phone',
        'servicePostalAddress' => 'Service postal address',
        'serviceSmsNumber' => 'Service sms number',
        'serviceType' => 'Service type',
        'serviceUrl' => 'Service url',
        'sibling' => 'Sibling',
        'significantLink' => 'Significant link',
        'signOrSymptom' => 'Sign or symptom',
        'skills' => 'Skills',
        'sku' => 'SKU',
        'slogan' => 'Slogan',
        'smokingAllowed' => 'Smoking allowed',
        'sourceOrganization' => 'Source organization',
        'softwareAddOn' => 'Software add on',
        'softwareHelp' => 'Software help',
        'softwareRequirements' => 'Software requirements',
        'softwareVersion' => 'Software version',
        'spatial' => 'Spatial',
        'spatialCoverage' => 'Spatial coverage',
        'speakable' => 'Speakable',
        'specialty' => 'Specialty',
        'specialOpeningHoursSpecification' => 'Special opening hours specification',
        'sponsor' => 'Sponsor',
        'spouse' => 'Spouse',
        'stage' => 'Stage',
        'startDate' => 'Start date',
        'startTime' => 'Start time',
        'status' => 'Status',
        'streetAddress' => 'Street address',
        'storageRequirements' => 'Storage requirements',
        'study' => 'Study',
        'studyLocation' => 'Study location',
        'studySubject' => 'Study subject',
        'subEvent' => 'Sub event',
        'subOrganization' => 'Sub organization',
        'subjectOf' => 'Subject of',
        'successorOf' => 'Successor of',
        'suggestedAnswer' => 'Suggested answer',
        'suggestedGender' => 'Suggested gender',
        'suggestedMaxAge' => 'Suggested max age',
        'suggestedMinAge' => 'Suggested min age',
        'superEvent' => 'Super event',
        'supportingData' => 'Supporting data',

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
        'track' => 'Track',
        'trailer' => 'Trailer',
        'transcript' => 'Transcript',
        'translator' => 'Translator',
        'typeOfGood' => 'Type of good',
        'typicalAgeRange' => 'Typical age range',
        'typicalTest' => 'Typical test',

        'unitCode' => 'Unit code',
        'unitText' => 'Unit text',
        'uploadDate' => 'Upload date',
        'upvoteCount' => 'Upvote count',
        'url' => 'URL',
        'urlTemplate' => 'URL template',
        'userInteractionCount' => 'User interaction count',

        'validFrom' => 'Valid from',
        'validThrough' => 'Valid through',
        'value' => 'Value',
        'valueAddedTaxIncluded' => 'Value added tax included',
        'valueReference' => 'Value reference',
        'vatID' => 'The Value-added Tax ID',
        'version' => 'Version',
        'video' => 'Video',
        'videoFrameSize' => 'Video frame size',
        'videoQuality' => 'Video quality',

        'warranty' => 'Warranty',
        'weight' => 'Weight',
        'width' => 'Width',
        'workExample' => 'Work example',
        'workFeatured' => 'Work featured',
        'workLocation' => 'Work location',
        'workPerformed' => 'Work performed',
        'worksFor' => 'Works for',
        'worstRating' => 'Worst rating',

        'xpath' => 'XPath'
    ]
];
