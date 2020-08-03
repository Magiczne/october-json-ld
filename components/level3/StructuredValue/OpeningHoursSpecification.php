<?php namespace Magiczne\JsonLd\Components\Level3\StructuredValue;

use Magiczne\JsonLd\Classes\Enumerations\Enumerations;
use Magiczne\JsonLd\Components\Level2\Intangible\StructuredValue;

class OpeningHoursSpecification extends StructuredValue
{
    public function componentDetails()
    {
        return [
            'name' => 'OpeningHoursSpecification',
            'description' => 'https://schema.org/OpeningHoursSpecification'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'closes',
            'dayOfWeek' => Enumerations::$dayOfWeek,
            'opens',
            'validFrom',
            'validThrough'
        ], 'OpeningHoursSpecification'));
    }
}
