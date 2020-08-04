<?php namespace Magiczne\JsonLd\Components\Level2\CreativeWork;

use Magiczne\JsonLd\Components\Level1\CreativeWork;

class SoftwareApplication extends CreativeWork
{
    public function componentDetails()
    {
        return [
            'name' => 'SoftwareApplication',
            'description' => 'https://schema.org/SoftwareApplication'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'applicationCategory',
            'applicationSubCategory',
            'applicationSuite',
            'availableOnDevice',
            'countriesNotSupported',
            'countriesSupported',
            'downloadUrl',
            'featureList',
            'fileSize',
            'installUrl',
            'memoryRequirements',
            'operatingSystem',
            'permissions',
            'processorRequirements',
            'releaseNotes',
            'screenshot',
            'softwareAddOn',
            'softwareHelp',
            'softwareRequirements',
            'softwareVersion',
            'storageRequirements',
            'supportingData'
        ], 'SoftwareApplication'));
    }
}
