<?php namespace Magiczne\JsonLd\Components\Level3\StructuredValue;

use Magiczne\JsonLd\Components\Level2\Intangible\StructuredValue;

class QuantitativeValue extends StructuredValue
{
    public function componentDetails()
    {
        return [
            'name' => 'QuantitativeValue',
            'description' => 'https://schema.org/QuantitativeValue'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'additionalProperty',
            'maxValue',
            'minValue',
            'unitCode',
            'unitText',
            'value',
            'valueReference'
        ], 'QuantitativeValue'));
    }
}
