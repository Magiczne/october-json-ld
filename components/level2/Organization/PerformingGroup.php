<?php namespace Magiczne\JsonLd\Components\Level2\Organization;

use Magiczne\JsonLd\Components\Level1\Organization;

class PerformingGroup extends Organization
{
    public function componentDetails()
    {
        return [
            'name' => 'PerformingGroup',
            'description' => 'https://schema.org/PerformingGroup'
        ];
    }
}
