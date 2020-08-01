<?php namespace Magiczne\JsonLd\Components\Level3\StructuredValue;

use Magiczne\JsonLd\Components\Level2\Intangible\StructuredValue;

class MonetaryAmount extends StructuredValue
{
    public function componentDetails()
    {
        return [
            'name' => 'MonetaryAmount',
            'description' => 'https://schema.org/MonetaryAmount'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'currency',
            'maxValue',
            'minValue',
            'validFrom',
            'validThrough',
            'value'
        ], 'MonetaryAmount'));
    }
}
