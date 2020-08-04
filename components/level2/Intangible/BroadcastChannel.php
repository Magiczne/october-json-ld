<?php namespace Magiczne\JsonLd\Components\Level2\Intangible;

use Magiczne\JsonLd\Components\Level1\Intangible;

class BroadcastChannel extends Intangible
{
    public function componentDetails()
    {
        return [
            'name' => 'BroadcastChannel',
            'description' => 'https://schema.org/BroadcastChannel'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'broadcastChannelId',
            'broadcastFrequency',
            'broadcastServiceTier',
            'genre',
            'inBroadcastLineup',
            'providesBroadcastService'
        ], 'BroadcastChannel'));
    }
}
