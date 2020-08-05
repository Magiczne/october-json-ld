<?php namespace Magiczne\JsonLd\Components\Level2\MedicalEntity;

use Magiczne\JsonLd\Components\Level1\MedicalEntity;

class MedicalStudy extends MedicalEntity
{
    public function componentDetails()
    {
        return [
            'name' => 'MedicalStudy',
            'description' => 'https://schema.org/MedicalStudy'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'healthCondition',
            'sponsor',
            'status',
            'studyLocation',
            'studySubject'
        ], 'MedicalStudy'));
    }
}
