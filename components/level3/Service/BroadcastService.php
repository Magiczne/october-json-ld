<?php namespace Magiczne\JsonLd\Components\Level3\Service;

use Magiczne\JsonLd\Components\Level2\Intangible\Service;

class BroadcastService extends Service
{
    public function componentDetails()
    {
        return [
            'name' => 'BroadcastService',
            'description' => 'https://schema.org/BroadcastService'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'broadcastAffiliateOf',
            'broadcastDisplayName',
            'broadcastFrequency',
            'broadcastTimezone',
            'broadcaster',
            'hasBroadcastChannel',
            'inLanguage',
            'parentService',
            'videoFormat'
        ], 'BroadcastService'));
    }
}
