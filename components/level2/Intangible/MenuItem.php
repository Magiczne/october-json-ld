<?php namespace Magiczne\JsonLd\Components\Level2\Intangible;

use Magiczne\JsonLd\Components\Level1\Intangible;

class MenuItem extends Intangible
{
    public function componentDetails()
    {
        return [
            'name' => 'MenuItem',
            'description' => 'https://schema.org/MenuItem'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'menuAddOn',
            'nutrition',
            'offers',
            'suitableForDiet'
        ], 'MenuItem'));
    }
}
