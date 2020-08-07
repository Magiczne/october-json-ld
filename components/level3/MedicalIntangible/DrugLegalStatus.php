<?php namespace Magiczne\JsonLd\Components\Level3\MedicalIntangible;

use Magiczne\JsonLd\Components\Level2\MedicalEntity\MedicalIntangible;

class DrugLegalStatus extends MedicalIntangible
{
    public function componentDetails()
    {
        return [
            'name' => 'DrugLegalStatus',
            'description' => 'https://schema.org/DrugLegalStatus'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'applicableLocation'
        ], 'DrugLegalStatus'));
    }
}
