<?php namespace Magiczne\JsonLd\Components\Level3\StructuredValue;

use Magiczne\JsonLd\Components\Level2\Intangible\StructuredValue;

class PriceSpecification extends StructuredValue
{
    public function componentDetails()
    {
        return [
            'name' => 'PriceSpecification',
            'description' => 'https://schema.org/PriceSpecification'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'eligibleQuantity',
            'eligibleTransactionVolume',
            'maxPrice',
            'minPrice',
            'price',
            'priceCurrency',
            'validFrom',
            'validThrough',
            'valueAddedTaxIncluded' => $this->dropdownBoolean
        ], 'PriceSpecification'));
    }
}
