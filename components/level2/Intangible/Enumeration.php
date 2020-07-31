<?php namespace Magiczne\JsonLd\Components\Level2\Intangible;

use Exception;
use Magiczne\JsonLd\Components\Level1\Intangible;

class Enumeration extends Intangible
{
    public function componentDetails()
    {
        return [
            'name' => 'Enumeration',
            'description' => 'https://schema.org/Enumeration'
        ];
    }

    public function toJson()
    {
        throw new Exception("Enumerations cannot be displayed as a standalone JSON");
    }
}
