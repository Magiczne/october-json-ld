<?php namespace Magiczne\JsonLd\Components;

class Intangible extends Thing
{
    public $isHidden = true;

    public function componentDetails()
    {
        return [
            'name' => 'Intangible',
            'description' => 'https://schema.org/Intangible'
        ];
    }
}
