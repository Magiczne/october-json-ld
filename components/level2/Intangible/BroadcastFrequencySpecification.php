<?php namespace Magiczne\JsonLd\Components\Level2\Intangible;

use Magiczne\JsonLd\Components\Level1\Intangible;

class BroadcastFrequencySpecification extends Intangible
{
    public function componentDetails()
    {
        return [
            'name' => 'BroadcastFrequencySpecification',
            'description' => 'https://schema.org/BroadcastFrequencySpecification'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'broadcastFrequencyValue'
        ], 'BroadcastFrequencySpecification'));
    }
}
