<?php namespace Magiczne\JsonLd\Components\Level3\StructuredValue;

use Magiczne\JsonLd\Components\Level2\Intangible\StructuredValue;

class OwnershipInfo extends StructuredValue
{
    public function componentDetails()
    {
        return [
            'name' => 'OwnershipInfo',
            'description' => 'https://schema.org/OwnershipInfo'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'acquiredForm',
            'ownedForm',
            'ownedThrough',
            'typeOfGood'
        ], 'OwnershipInfo'));
    }
}
