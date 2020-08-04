<?php namespace Magiczne\JsonLd\Components\Level3\StructuredValue;

use Magiczne\JsonLd\Components\Level2\Intangible\StructuredValue;

class QuantitativeValueDistribution extends StructuredValue
{
    public function componentDetails()
    {
        return [
            'name' => 'QuantitativeValueDistribution',
            'description' => 'https://schema.org/QuantitativeValueDistribution'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'duration',
            'median',
            'percentile10',
            'percentile25',
            'percentile75',
            'percentile90',
        ], 'QuantitativeValueDistribution'));
    }
}
