<?php namespace Magiczne\JsonLd\Components\Level3\PerformingGroup;

use Magiczne\JsonLd\Components\Level2\Organization\PerformingGroup;

class DanceGroup extends PerformingGroup
{
    public function componentDetails()
    {
        return [
            'name' => 'DanceGroup',
            'description' => 'https://schema.org/DanceGroup'
        ];
    }
}
