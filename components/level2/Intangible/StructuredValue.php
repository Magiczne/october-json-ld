<?php namespace Magiczne\JsonLd\Components\Level2\Intangible;

use Magiczne\JsonLd\Components\Level1\Intangible;

class StructuredValue extends Intangible
{
    public function componentDetails()
    {
        return [
            'name' => 'StructuredValue',
            'description' => 'https://schema.org/StructuredValue'
        ];
    }
}
