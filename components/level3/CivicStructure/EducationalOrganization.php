<?php namespace Magiczne\JsonLd\Components\Level3\CivicStructure;

use Magiczne\JsonLd\Components\Level1\Organization;
use Magiczne\JsonLd\Components\Level2\Place\CivicStructure;

/**
 * According to https://schema.org/EducationalOrganization this schema is as well
 * Thing > Organization > EducationalOrganization so there is a need to add properties
 * from Organization.
 */
class EducationalOrganization extends CivicStructure
{
    public function componentDetails()
    {
        return [
            'name' => 'EducationalOrganization',
            'description' => 'https://schema.org/EducationalOrganization'
        ];
    }

    public function defineProperties()
    {
        $organizationProperties = $this->generateProperties(Organization::$rawProperties, 'Organization');

        return array_merge(parent::defineProperties(), $organizationProperties, $this->generateProperties([
            'alumni'
        ], 'EducationalOrganization'));
    }
}
