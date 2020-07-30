<?php namespace Magiczne\JsonLd\Components;

class MedicalEntity extends Thing
{
    public function componentDetails()
    {
        return [
            'name' => 'MedicalEntity',
            'description' => 'https://schema.org/MedicalEntity'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'code',
            'guideline',
            'legalStatus',
            'medicineSystem',
            'recognizedAuthority',
            'relevantSpecialty',
            'study'
        ], 'MedicalEntity'));
    }
}
