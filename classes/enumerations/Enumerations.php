<?php namespace Magiczne\JsonLd\Classes\Enumerations;

class Enumerations
{
    /**
     * https://schema.org/ContactPointOption
     */
    public static $contactPointOption = [
        'type' => 'dropdown',
        'default' => 'enum::no-data',
        'options' => [
            'https://schema.org/HearingImpairedSupported' => 'magiczne.jsonld::lang.enumerations.contactPointOption.hearingImpairedSupported',
            'https://schema.org/TollFree' => 'magiczne.jsonld::lang.enumerations.contactPointOption.tollFree',
            'enum::no-data' => 'magiczne.jsonld::lang.global.noData'
        ]
    ];

    /**
     * https://schema.org/DayOfWeek
     */
    public static $dayOfWeek = [
        'type' => 'dropdown',
        'default' => 'enum::no-data',
        'options' => [
            'https://schema.org/Friday' => 'magiczne.jsonld::lang.enumerations.dayOfWeek.friday',
            'https://schema.org/Monday' => 'magiczne.jsonld::lang.enumerations.dayOfWeek.monday',
            'https://schema.org/PublicHolidays' => 'magiczne.jsonld::lang.enumerations.dayOfWeek.publicHolidays',
            'https://schema.org/Saturday' => 'magiczne.jsonld::lang.enumerations.dayOfWeek.saturday',
            'https://schema.org/Sunday' => 'magiczne.jsonld::lang.enumerations.dayOfWeek.sunday',
            'https://schema.org/Thursday' => 'magiczne.jsonld::lang.enumerations.dayOfWeek.thursday',
            'https://schema.org/Tuesday' => 'magiczne.jsonld::lang.enumerations.dayOfWeek.tuesday',
            'https://schema.org/Wednesday' => 'magiczne.jsonld::lang.enumerations.dayOfWeek.wednesday',
            'enum::no-data' => 'magiczne.jsonld::lang.global.noData'
        ]
    ];

    /**
     * https://schema.org/ItemListOrderType
     */
    public static $itemListOrderType = [
        'type' => 'dropdown',
        'default' => 'enum::no-data',
        'options' => [
            'https://schema.org/ItemListOrderAscending' => 'magiczne.jsonld::lang.enumerations.itemListOrderType.itemListOrderAscending',
            'https://schema.org/ItemListOrderDescending' => 'magiczne.jsonld::lang.enumerations.itemListOrderType.itemListOrderDescending',
            'https://schema.org/ItemListUnordered' => 'magiczne.jsonld::lang.enumerations.itemListOrderType.itemListUnordered',
            'enum::no-data' => 'magiczne.jsonld::lang.global.noData'
        ]
    ];

    /**
     * https://schema.org/MapCategoryType
     */
    public static $mapCategoryType = [
        'type' => 'dropdown',
        'default' => 'enum::no-data',
        'options' => [
            'https://schema.org/ParkingMap' => 'magiczne.jsonld::lang.enumerations.mapCategoryType.parkingMap',
            'https://schema.org/SeatingMap' => 'magiczne.jsonld::lang.enumerations.mapCategoryType.seatingMap',
            'https://schema.org/TransitMap' => 'magiczne.jsonld::lang.enumerations.mapCategoryType.transitMap',
            'https://schema.org/VenueMap' => 'magiczne.jsonld::lang.enumerations.mapCategoryType.venueMap',
            'enum::no-data' => 'magiczne.jsonld::lang.global.noData'
        ]
    ];

    /**
     * https://schema.org/MusicAlbumProductionType
     */
    public static $musicAlbumProductionType = [
        'type' => 'dropdown',
        'default' => 'enum::no-data',
        'options' => [
            'https://schema.org/CompilationAlbum' => 'magiczne.jsonld::lang.enumerations.musicAlbumProductionType.compilationAlbum',
            'https://schema.org/DJMixAlbum' => 'magiczne.jsonld::lang.enumerations.musicAlbumProductionType.dJMixAlbum',
            'https://schema.org/DemoAlbum' => 'magiczne.jsonld::lang.enumerations.musicAlbumProductionType.demoAlbum',
            'https://schema.org/LiveAlbum' => 'magiczne.jsonld::lang.enumerations.musicAlbumProductionType.liveAlbum',
            'https://schema.org/MixtapeAlbum' => 'magiczne.jsonld::lang.enumerations.musicAlbumProductionType.mixtapeAlbum',
            'https://schema.org/RemixAlbum' => 'magiczne.jsonld::lang.enumerations.musicAlbumProductionType.remixAlbum',
            'https://schema.org/SoundtrackAlbum' => 'magiczne.jsonld::lang.enumerations.musicAlbumProductionType.soundtrackAlbum',
            'https://schema.org/SpokenWordAlbum' => 'magiczne.jsonld::lang.enumerations.musicAlbumProductionType.spokenWordAlbum',
            'https://schema.org/StudioAlbum' => 'magiczne.jsonld::lang.enumerations.musicAlbumProductionType.studioAlbum',
            'enum::no-data' => 'magiczne.jsonld::lang.global.noData'
        ]
    ];

    /**
     * https://schema.org/MusicAlbumReleaseType
     */
    public static $musicAlbumReleaseType = [
        'type' => 'dropdown',
        'default' => 'enum::no-data',
        'options' => [
            'https://schema.org/AlbumRelease' => 'magiczne.jsonld::lang.enumerations.musicAlbumReleaseType.albumRelease',
            'https://schema.org/BroadcastRelease' => 'magiczne.jsonld::lang.enumerations.musicAlbumReleaseType.broadcastRelease',
            'https://schema.org/EPRelease' => 'magiczne.jsonld::lang.enumerations.musicAlbumReleaseType.ePRelease',
            'https://schema.org/SingleRelease' => 'magiczne.jsonld::lang.enumerations.musicAlbumReleaseType.singleRelease',
            'enum::no-data' => 'magiczne.jsonld::lang.global.noData'
        ]
    ];

    /**
     * https://schema.org/MusicReleaseFormatType
     */
    public static $musicReleaseFormatType = [
        'type' => 'dropdown',
        'default' => 'enum::no-data',
        'options' => [
            'https://schema.org/CDFormat' => 'magiczne.jsonld::lang.enumerations.musicReleaseFormatType.cdFormat',
            'https://schema.org/CassetteFormat' => 'magiczne.jsonld::lang.enumerations.musicReleaseFormatType.cassetteFormat',
            'https://schema.org/DVDFormat' => 'magiczne.jsonld::lang.enumerations.musicReleaseFormatType.dvdFormat',
            'https://schema.org/DigitalAudioTapeFormat' => 'magiczne.jsonld::lang.enumerations.musicReleaseFormatType.digitalAudioTapeFormat',
            'https://schema.org/DigitalFormat' => 'magiczne.jsonld::lang.enumerations.musicReleaseFormatType.digitalFormat',
            'https://schema.org/LaserDiscFormat' => 'magiczne.jsonld::lang.enumerations.musicReleaseFormatType.laserDiscFormat',
            'https://schema.org/VinylFormat' => 'magiczne.jsonld::lang.enumerations.musicReleaseFormatType.vinylFormat',
            'enum::no-data' => 'magiczne.jsonld::lang.global.noData'
        ]
    ];

    /**
     * https://schema.org/OfferItemCondition
     */
    public static $offerItemCondition = [
        'type' => 'dropdown',
        'default' => 'enum::no-data',
        'options' => [
            'https://schema.org/DamagedCondition' => 'magiczne.jsonld::lang.enumerations.offerItemCondition.damagedCondition',
            'https://schema.org/NewCondition' => 'magiczne.jsonld::lang.enumerations.offerItemCondition.newCondition',
            'https://schema.org/RefurbishedCondition' => 'magiczne.jsonld::lang.enumerations.offerItemCondition.refurbishedCondition',
            'https://schema.org/UsedCondition' => 'magiczne.jsonld::lang.enumerations.offerItemCondition.usedCondition',
            'enum::no-data' => 'magiczne.jsonld::lang.global.noData'
        ]
    ];

    /*
     * https://schema.org/PhysicalActivityCategory
     */
    public static $physicalActivityCategory = [
        'type' => 'dropdown',
        'default' => 'enum::no-data',
        'options' => [
            'https://schema.org/AerobicActivity' => 'magiczne.jsonld::lang.enumerations.physicalActivityCategory.aerobicActivity',
            'https://schema.org/AnaerobicActivity' => 'magiczne.jsonld::lang.enumerations.physicalActivityCategory.anaerobicActivity',
            'https://schema.org/Balance' => 'magiczne.jsonld::lang.enumerations.physicalActivityCategory.balance',
            'https://schema.org/Flexibility' => 'magiczne.jsonld::lang.enumerations.physicalActivityCategory.flexibility',
            'https://schema.org/LeisureTimeActivity' => 'magiczne.jsonld::lang.enumerations.physicalActivityCategory.leisureTimeActivity',
            'https://schema.org/OccupationalActivity' => 'magiczne.jsonld::lang.enumerations.physicalActivityCategory.occupationalActivity',
            'https://schema.org/StrengthTraining' => 'magiczne.jsonld::lang.enumerations.physicalActivityCategory.strengthTraining',
            'enum::no-data' => 'magiczne.jsonld::lang.global.noData'
        ]
    ];
}
