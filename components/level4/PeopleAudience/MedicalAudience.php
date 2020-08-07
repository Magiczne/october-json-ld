<?php namespace Magiczne\JsonLd\Components\Level4\PeopleAudience;

use Magiczne\JsonLd\Components\Level3\Audience\PeopleAudience;

/**
 * According to https://schema.org/MedicalAudience this schema is as well
 * Thing > Intangible > Audience > MedicalAudience
 */
class MedicalAudience extends PeopleAudience
{
    public function componentDetails()
    {
        return [
            'name' => 'MedicalAudience',
            'description' => 'https://schema.org/MedicalAudience'
        ];
    }
}
