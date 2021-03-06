<?php namespace Magiczne\JsonLd;

use Magiczne\JsonLd\Components\Level1\{
    CreativeWork,
    Event,
    Action,
    MedicalEntity,
    Organization,
    Person,
    Place,
    Product
};
use Magiczne\JsonLd\Components\Level2\CreativeWork\{Clip,
    Comment,
    CreativeWorkSeason,
    CreativeWorkSeries,
    DataCatalog,
    Dataset,
    Episode,
    Map,
    MediaObject,
    Menu,
    MenuSection,
    MusicComposition,
    MusicPlaylist,
    MusicRecording,
    Photograph,
    Question,
    Review,
    SoftwareApplication,
    SoftwareSourceCode,
    WebPage,
    WebPageElement};
use Magiczne\JsonLd\Components\Level2\Intangible\{AlignmentObject,
    Audience,
    Brand,
    BroadcastChannel,
    BroadcastFrequencySpecification,
    ComputerLanguage,
    DataFeedItem,
    Demand,
    EntryPoint,
    ItemList,
    ListItem,
    MenuItem,
    Occupation,
    Offer,
    ProgramMembership,
    Rating,
    Service,
    ServiceChannel,
    SpeakableSpecification,
    StructuredValue};
use Magiczne\JsonLd\Components\Level3\MediaObject\{
    AudioObject,
    DataDownload,
    ImageObject,
    MusicVideoObject,
    VideoObject
};
use Magiczne\JsonLd\Components\Level2\Event\PublicationEvent;
use Magiczne\JsonLd\Components\Level2\MedicalEntity\MedicalCondition;
use Magiczne\JsonLd\Components\Level2\MedicalEntity\MedicalGuideline;
use Magiczne\JsonLd\Components\Level2\MedicalEntity\MedicalStudy;
use Magiczne\JsonLd\Components\Level2\Organization\PerformingGroup;
use Magiczne\JsonLd\Components\Level2\Place\AdministrativeArea;
use Magiczne\JsonLd\Components\Level2\Place\CivicStructure;
use Magiczne\JsonLd\Components\Level2\Product\ProductModel;
use Magiczne\JsonLd\Components\Level3\Audience\PeopleAudience;
use Magiczne\JsonLd\Components\Level3\CivicStructure\EducationalOrganization;
use Magiczne\JsonLd\Components\Level3\Comment\Answer;
use Magiczne\JsonLd\Components\Level3\Dataset\DataFeed;
use Magiczne\JsonLd\Components\Level3\Enumeration\ItemListOrderType;
use Magiczne\JsonLd\Components\Level3\Enumeration\PhysicalActivityCategory;
use Magiczne\JsonLd\Components\Level3\StructuredValue\{ContactPoint,
    GeoCoordinates,
    GeoShape,
    InteractionCounter,
    MonetaryAmount,
    NutritionInformation,
    OpeningHoursSpecification,
    OwnershipInfo,
    PriceSpecification,
    PropertyValue,
    QuantitativeValue,
    QuantitativeValueDistribution};
use Magiczne\JsonLd\Components\Level3\ItemList\BreadcrumbList;
use Magiczne\JsonLd\Components\Level3\ItemList\OfferCatalog;
use Magiczne\JsonLd\Components\Level3\MedicalIntangible\DrugLegalStatus;
use Magiczne\JsonLd\Components\Level3\MusicPlaylist\MusicAlbum;
use Magiczne\JsonLd\Components\Level3\MusicPlaylist\MusicRelease;
use Magiczne\JsonLd\Components\Level3\PerformingGroup\DanceGroup;
use Magiczne\JsonLd\Components\Level3\PerformingGroup\MusicGroup;
use Magiczne\JsonLd\Components\Level3\PerformingGroup\TheaterGroup;
use Magiczne\JsonLd\Components\Level3\Rating\AggregateRating;
use Magiczne\JsonLd\Components\Level3\Service\BroadcastService;
use Magiczne\JsonLd\Components\Level3\Service\CableOrSatelliteService;
use Magiczne\JsonLd\Components\Level3\WebPage\AboutPage;
use Magiczne\JsonLd\Components\Level3\WebPage\CheckoutPage;
use Magiczne\JsonLd\Components\Level3\WebPage\CollectionPage;
use Magiczne\JsonLd\Components\Level3\WebPage\ContactPage;
use Magiczne\JsonLd\Components\Level3\WebPage\FAQPage;
use Magiczne\JsonLd\Components\Level3\WebPage\ItemPage;
use Magiczne\JsonLd\Components\Level3\WebPage\MedicalWebPage;
use Magiczne\JsonLd\Components\Level3\WebPage\ProfilePage;
use Magiczne\JsonLd\Components\Level3\WebPage\QAPage;
use Magiczne\JsonLd\Components\Level3\WebPage\SearchResultsPage;
use Magiczne\JsonLd\Components\Level3\WebPageElement\SiteNavigationElement;
use Magiczne\JsonLd\Components\Level3\WebPageElement\Table;
use Magiczne\JsonLd\Components\Level3\WebPageElement\WPAdBlock;
use Magiczne\JsonLd\Components\Level3\WebPageElement\WPFooter;
use Magiczne\JsonLd\Components\Level3\WebPageElement\WPHeader;
use Magiczne\JsonLd\Components\Level3\WebPageElement\WPSideBar;
use Magiczne\JsonLd\Components\Level4\ContactPoint\PostalAddress;
use Magiczne\JsonLd\Components\Level4\ImageObject\Barcode;
use Magiczne\JsonLd\Components\Level4\MedicalEnumeration\MedicalAudienceType;
use Magiczne\JsonLd\Components\Level4\MedicalEnumeration\MedicalStudyStatus;
use Magiczne\JsonLd\Components\Level4\PeopleAudience\MedicalAudience;
use Magiczne\JsonLd\Components\Level4\PropertyValue\LocationFeatureSpecification;
use Magiczne\JsonLd\Components\Level4\QuantitativeValueDistribution\MonetaryAmountDistribution;
use Magiczne\JsonLd\Components\Thing;
use Magiczne\JsonLd\Models\Settings;
use System\Classes\PluginBase;
use System\Classes\SettingsManager;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            // Level 0
            Thing::class => 'Thing',

            // Level 1
            Action::class => 'Action',
            CreativeWork::class => 'CreativeWork',
            Event::class => 'Event',
            MedicalEntity::class => 'MedicalEntity',
            Organization::class => 'Organization',
            Person::class => 'Person',
            Place::class => 'Place',
            Product::class => 'Product',

            // Level 2 - Creative Work
            Clip::class => 'Clip',
            Comment::class => 'Comment',
            CreativeWorkSeason::class => 'CreativeWorkSeason',
            CreativeWorkSeries::class => 'CreativeWorkSeries',
            DataCatalog::class => 'DataCatalog',
            Dataset::class => 'Dataset',
            Episode::class => 'Episode',
            Map::class => 'Map',
            MediaObject::class => 'MediaObject',
            Menu::class => 'Menu',
            MenuSection::class => 'MenuSection',
            MusicComposition::class => 'MusicComposition',
            MusicPlaylist::class => 'MusicPlaylist',
            MusicRecording::class => 'MusicRecording',
            Photograph::class => 'Photograph',
            Question::class => 'Question',
            Review::class => 'Review',
            SoftwareApplication::class => 'SoftwareApplication',
            SoftwareSourceCode::class => 'SoftwareSourceCode',
            WebPage::class => 'WebPage',
            WebPageElement::class => 'WebPageElement',

            // Level 2 - Event
            PublicationEvent::class => 'PublicationEvent',

            // Level 2 - Intangible
            AlignmentObject::class => 'AlignmentObject',
            Audience::class => 'Audience',
            Brand::class => 'Brand',
            BroadcastChannel::class => 'BroadcastChannel',
            BroadcastFrequencySpecification::class => 'BroadcastFrequencySpecification',
            ComputerLanguage::class => 'ComputerLanguage',
            DataFeedItem::class => 'DataFeedItem',
            Demand::class => 'Demand',
            EntryPoint::class => 'EntryPoint',
            ItemList::class => 'ItemList',
            ListItem::class => 'ListItem',
            MenuItem::class => 'MenuItem',
            ProgramMembership::class => 'ProgramMembership',
            Rating::class => 'Rating',
            Service::class => 'Service',
            ServiceChannel::class => 'ServiceChannel',
            SpeakableSpecification::class => 'SpeakableSpecification',
            StructuredValue::class => 'StructuredValue',
            Occupation::class => 'Occupation',
            Offer::class => 'Offer',

            // Level 2 - MedicalEntity
            MedicalCondition::class => 'MedicalCondition',
            MedicalGuideline::class => 'MedicalGuideline',
            MedicalStudy::class => 'MedicalStudy',

            // Level 2 - Organization
            PerformingGroup::class => 'PerformingGroup',

            // Level 2 - Place
            AdministrativeArea::class => 'AdministrativeArea',
            CivicStructure::class => 'CivicStructure',

            // Level 2 - Product
            ProductModel::class => 'ProductModel',

            // Level 3 - Audience
            PeopleAudience::class => 'PeopleAudience',

            // Level 3 - CivicStructure
            EducationalOrganization::class => 'EducationalOrganization',

            // Level 3 - Dataset
            DataFeed::class => 'DataFeed',

            // Level 3 - Enumeration
            ItemListOrderType::class => 'ItemListOrderType',
            PhysicalActivityCategory::class => 'PhysicalActivityCategory',

            // Level 3 - Item List
            BreadcrumbList::class => 'BreadcrumbList',
            OfferCatalog::class => 'OfferCatalog',

            // Level 3 - Media Object
            AudioObject::class => 'AudioObject',
            DataDownload::class => 'DataDownload',
            ImageObject::class => 'ImageObject',
            MusicVideoObject::class => 'MusicVideoObject',
            VideoObject::class => 'VideoObject',

            // Level 3 - MedicalIntangible
            DrugLegalStatus::class => 'DrugLegalStatus',

            // Level 3 - MusicPlaylist
            MusicAlbum::class => 'MusicAlbum',
            MusicRelease::class => 'MusicRelease',

            // Level 3 - PerformingGroup
            DanceGroup::class => 'DanceGroup',
            MusicGroup::class => 'MusicGroup',
            TheaterGroup::class => 'TheaterGroup',

            // Level 3 - Comment
            Answer::class => 'Answer',

            // Level 3 - Rating
            AggregateRating::class => 'AggregateRating',

            // Level 3 - Service
            BroadcastService::class => 'BroadcastService',
            CableOrSatelliteService::class => 'CableOrSatelliteService',

            // Level 3 - Structured Value
            ContactPoint::class => 'ContactPoint',
            GeoCoordinates::class => 'GeoCoordinates',
            GeoShape::class => 'GeoShape',
            InteractionCounter::class => 'InteractionCounter',
            MonetaryAmount::class => 'MonetaryAmount',
            NutritionInformation::class => 'NutritionInformation',
            OpeningHoursSpecification::class => 'OpeningHoursSpecification',
            OwnershipInfo::class => 'OwnershipInfo',
            PriceSpecification::class => 'PriceSpecification',
            PropertyValue::class => 'PropertyValue',
            QuantitativeValue::class => 'QuantitativeValue',
            QuantitativeValueDistribution::class => 'QuantitativeValueDistribution',

            // Level 3 - Web Page
            AboutPage::class => 'AboutPage',
            CheckoutPage::class => 'CheckoutPage',
            CollectionPage::class => 'CollectionPage',
            ContactPage::class => 'ContactPage',
            FAQPage::class => 'FAQPage',
            ItemPage::class => 'ItemPage',
            MedicalWebPage::class => 'MedicalWebPage',
            ProfilePage::class => 'ProfilePage',
            QAPage::class => 'QAPage',
            SearchResultsPage::class => 'SearchResultsPage',

            // Level 3 - WebPageElement
            SiteNavigationElement::class => 'SiteNavigationElement',
            Table::class => 'Table',
            WPAdBlock::class => 'WPAdBlock',
            WPFooter::class => 'WPFooter',
            WPHeader::class => 'WPHeader',
            WPSideBar::class => 'WPSideBar',

            // Level 4 - Contact Point
            PostalAddress::class => 'PostalAddress',

            // Level 4 - ImageObject
            Barcode::class => 'Barcode',

            // Level 4 - MedicalEnumeration
            MedicalAudienceType::class => 'MedicalAudienceType',
            MedicalStudyStatus::class => 'MedicalStudyStatus',

            // Level 4 - LocationFeatureSpecification
            LocationFeatureSpecification::class => 'LocationFeatureSpecification',

            // Level 4 - PeopleAudience
            MedicalAudience::class => 'MedicalAudience',

            // Level 4 - QuantitativeValueDistribution
            MonetaryAmountDistribution::class => 'MonetaryAmountDistribution'
        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label' => 'magiczne.jsonld::lang.plugin.name',
                'description' => 'magiczne.jsonld::lang.settings.description',
                'icon' => 'icon-file-code-o',
                'category' => SettingsManager::CATEGORY_CMS,
                'class' => Settings::class,
                'permissions' => [
                    'magiczne.jsonld.settings'
                ]
            ]
        ];
    }
}
