<?php namespace Magiczne\JsonLd\Components\Level3\PerformingGroup;

use Magiczne\JsonLd\Components\Level2\Organization\PerformingGroup;

class TheaterGroup extends PerformingGroup
{
    public function componentDetails()
    {
        return [
            'name' => 'TheaterGroup',
            'description' => 'https://schema.org/TheaterGroup'
        ];
    }
}
