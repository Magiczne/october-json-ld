<?php namespace Magiczne\JsonLd\Components\Level2\MedicalEntity;

use Magiczne\JsonLd\Components\Level1\MedicalEntity;

class MedicalIntangible extends MedicalEntity
{
    public function componentDetails()
    {
        return [
            'name' => 'MedicalIntangible',
            'description' => 'https://schema.org/MedicalIntangible'
        ];
    }
}
