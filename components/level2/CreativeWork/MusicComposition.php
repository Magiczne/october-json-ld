<?php namespace Magiczne\JsonLd\Components\Level2\CreativeWork;

use Magiczne\JsonLd\Components\Level1\CreativeWork;

class MusicComposition extends CreativeWork
{
    public function componentDetails()
    {
        return [
            'name' => 'MusicComposition',
            'description' => 'https://schema.org/MusicComposition'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'composer',
            'firstPerformance',
            'includedComposition',
            'iswcCode',
            'lyricist',
            'lyrics',
            'musicArrangement',
            'musicCompositionForm',
            'musicalKey',
            'recordedAs'
        ], 'MusicComposition'));
    }
}
