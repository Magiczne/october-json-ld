<?php namespace Magiczne\JsonLd\Components\Level2\Intangible;

use Magiczne\JsonLd\Components\Level1\Intangible;

class ProgramMembership extends Intangible
{
    public function componentDetails()
    {
        return [
            'name' => 'ProgramMembership',
            'description' => 'https://schema.org/ProgramMembership'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'hostingOrganization',
            'member',
            'membershipNumber',
            'programName'
        ], 'ProgramMembership'));
    }
}
