<?php namespace Magiczne\JsonLd\Components\Level1;

use Magiczne\JsonLd\Classes\Enumerations\MedicalEnumerations;
use Magiczne\JsonLd\Components\Thing;

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
            'medicineSystem' => MedicalEnumerations::$medicineSystem,
            'recognizedAuthority',
            'relevantSpecialty',
            'study'
        ], 'MedicalEntity'));
    }
}
