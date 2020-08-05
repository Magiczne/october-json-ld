<?php namespace Magiczne\JsonLd\Components\Level3\Audience;

use Magiczne\JsonLd\Components\Level2\Intangible\Audience;

class PeopleAudience extends Audience
{
    public function componentDetails()
    {
        return [
            'name' => 'PeopleAudience',
            'description' => 'https://schema.org/PeopleAudience'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'healthCondition',
            'requiredGender',
            'requiredMaxAge',
            'requiredMinAge',
            'suggestedGender',
            'suggestedMaxAge',
            'suggestedMinAge'
        ], 'PeopleAudience'));
    }
}
