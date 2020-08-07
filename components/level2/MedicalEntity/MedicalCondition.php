<?php namespace Magiczne\JsonLd\Components\Level2\MedicalEntity;

use Magiczne\JsonLd\Components\Level1\MedicalEntity;

class MedicalCondition extends MedicalEntity
{
    public function componentDetails()
    {
        return [
            'name' => 'MedicalCondition',
            'description' => 'https://schema.org/MedicalCondition'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'associatedAnatomy',
            'differentialDiagnosis',
            'drug',
            'epidemiology',
            'expectedPrognosis',
            'naturalProgression',
            'pathophysiology',
            'possibleComplication',
            'possibleTreatment',
            'primaryPrevention',
            'riskFactor',
            'secondaryPrevention',
            'signOrSymptom',
            'stage',
            'status',
            'typicalTest'
        ], 'MedicalCondition'));
    }
}
