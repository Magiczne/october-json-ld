<?php namespace Magiczne\JsonLd\Components\Level3\StructuredValue;

use Magiczne\JsonLd\Components\Level2\Intangible\StructuredValue;

class InteractionCounter extends StructuredValue
{
    public function componentDetails()
    {
        return [
            'name' => 'InteractionCounter',
            'description' => 'https://schema.org/InteractionCounter'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'interactionService',
            'interactionType',
            'userInteractionCount'
        ], 'InteractionCounter'));
    }
}
