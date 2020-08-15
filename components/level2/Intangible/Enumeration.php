<?php namespace Magiczne\JsonLd\Components\Level2\Intangible;

use Exception;
use Magiczne\JsonLd\Classes\Enumerations\Enumerations;
use Magiczne\JsonLd\Components\Level1\Intangible;
use October\Rain\Support\Arr;

class Enumeration extends Intangible
{
    public function componentDetails()
    {
        return [
            'name' => 'Enumeration',
            'description' => 'https://schema.org/Enumeration'
        ];
    }

    public function toArray()
    {
        if (!Arr::has($this->defineProperties(), 'value')) {
            throw new Exception('Enumeration should define "value" property');
        }

        $value = $this->property('value');

        return $value === Enumerations::ENUM_NO_DATA ? null : $value;
    }

    public function toJson(): string
    {
        throw new Exception("Enumerations cannot be displayed as a standalone JSON");
    }
}
