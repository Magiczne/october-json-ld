<?php namespace Magiczne\JsonLd\Components\Level3\WebPage;

use Magiczne\JsonLd\Components\Level2\CreativeWork\WebPage;

class MedicalWebPage extends WebPage
{
    public function componentDetails()
    {
        return [
            'name' => 'MedicalWebPage',
            'description' => 'https://schema.org/MedicalWebPage'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'medicalAudience'
        ], 'MedicalWebPage'));
    }
}
