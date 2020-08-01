<?php namespace Magiczne\JsonLd\Components\Level2\Intangible;

use Magiczne\JsonLd\Components\Level1\Intangible;

class SpeakableSpecification extends Intangible
{
    public function componentDetails()
    {
        return [
            'name' => 'SpeakableSpecification',
            'description' => 'https://schema.org/SpeakableSpecification'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'cssSelector',
            'xpath'
        ], 'SpeakableSpecification'));
    }
}
