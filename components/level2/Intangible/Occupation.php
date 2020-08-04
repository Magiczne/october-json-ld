<?php namespace Magiczne\JsonLd\Components\Level2\Intangible;

use Magiczne\JsonLd\Components\Level1\Intangible;

class Occupation extends Intangible
{
    public function componentDetails()
    {
        return [
            'name' => 'Occupation',
            'description' => 'https://schema.org/Occupation'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'estimatedSalary',
            'experienceRequirements',
            'occupationLocation',
            'responsibilities',
            'skills'
        ], 'Occupation'));
    }
}
