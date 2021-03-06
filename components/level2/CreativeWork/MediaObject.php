<?php namespace Magiczne\JsonLd\Components\Level2\CreativeWork;

use Magiczne\JsonLd\Components\Level1\CreativeWork;

class MediaObject extends CreativeWork
{
    public function componentDetails()
    {
        return [
            'name' => 'MediaObject',
            'description' => 'https://schema.org/MediaObject'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'associatedArticle',
            'bitrate',
            'contentSize',
            'contentUrl',
            'duration',
            'embedUrl',
            'encodesCreativeWork',
            'endTime',
            'height',
            'playerType',
            'productionCompany',
            'regionsAllowed',
            'requiresSubscription',
            'startTime',
            'uploadDate',
            'width'
        ], 'MediaObject'));
    }
}
