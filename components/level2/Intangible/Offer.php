<?php namespace Magiczne\JsonLd\Components\Level2\Intangible;

use Magiczne\JsonLd\Classes\Enumerations\Enumerations;
use Magiczne\JsonLd\Components\Level1\Intangible;

class Offer extends Intangible
{
    public function componentDetails()
    {
        return [
            'name' => 'Offer',
            'description' => 'https://schema.org/Offer'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'acceptedPaymentMethod',
            'addOn',
            'advanceBookingRequirement',
            'aggregateRating',
            'areaServed',
            'availability',
            'availabilityEnds',
            'availabilityStarts',
            'availabilityAtOrFrom',
            'availabilityDeliveryMethod',
            'businessFunction',
            'category',
            'deliveryLeadTime',
            'eligibleCustomerType',
            'eligibleDuration',
            'eligibleQuantity',
            'eligibleRegion',
            'eligibleTransactionVolume',
            'gtin12',
            'gtin13',
            'gtin14',
            'gtin8',
            'includesObject',
            'inventoryLevel',
            'itemCondition' => Enumerations::$offerItemCondition,
            'itemOffered',
            'mpn',
            'offeredBy',
            'price',
            'priceCurrency',
            'priceSpecification',
            'priceValidUntil',
            'review',
            'seller',
            'serialNumber',
            'sku',
            'validFrom',
            'validThrough',
            'warranty'
        ], 'Offer'));
    }
}
