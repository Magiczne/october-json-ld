<?php namespace Magiczne\JsonLd\Components\Level4\QuantitativeValueDistribution;

use Magiczne\JsonLd\Components\Level3\StructuredValue\QuantitativeValueDistribution;

class MonetaryAmountDistribution extends QuantitativeValueDistribution
{
    public function componentDetails()
    {
        return [
            'name' => 'MonetaryAmountDistribution',
            'description' => 'https://schema.org/MonetaryAmountDistribution'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'currency'
        ], 'MonetaryAmountDistribution'));
    }
}
