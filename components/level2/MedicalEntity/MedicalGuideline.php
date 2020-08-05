<?php namespace Magiczne\JsonLd\Components\Level2\MedicalEntity;

use Magiczne\JsonLd\Classes\Enumerations\MedicalEnumerations;
use Magiczne\JsonLd\Components\Level1\MedicalEntity;

class MedicalGuideline extends MedicalEntity
{
    public function componentDetails()
    {
        return [
            'name' => 'MedicalGuideline',
            'description' => 'https://schema.org/MedicalGuideline'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'evidenceLevel' => MedicalEnumerations::$medicalEvidenceLevel,
            'evidenceOrigin',
            'guidelineDate',
            'guidelineSubject'
        ], 'MedicalGuideline'));
    }
}
