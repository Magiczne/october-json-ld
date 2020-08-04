<?php namespace Magiczne\JsonLd\Components\Level2\Intangible;

use Magiczne\JsonLd\Classes\Enumerations\Enumerations;
use Magiczne\JsonLd\Components\Level1\Intangible;

class Demand extends Intangible
{
    public function componentDetails()
    {
        return [
            'name' => 'Demand',
            'description' => 'https://schema.org/Demand'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'acceptedPaymentMethod',
            'advanceBookingRequirement',
            'areaServed',
            'availability',
            'availabilityEnds',
            'availabilityStarts',
            'availabilityAtOrFrom',
            'availabilityDeliveryMethod',
            'businessFunction',
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
            'priceSpecification',
            'seller',
            'serialNumber',
            'sku',
            'validFrom',
            'validThrough',
            'warranty'
        ], 'Demand'));
    }
}
