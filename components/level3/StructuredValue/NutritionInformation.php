<?php namespace Magiczne\JsonLd\Components\Level3\StructuredValue;

use Magiczne\JsonLd\Components\Level2\Intangible\StructuredValue;

class NutritionInformation extends StructuredValue
{
    public function componentDetails()
    {
        return [
            'name' => 'NutritionInformation',
            'description' => 'https://schema.org/NutritionInformation'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'calories',
            'carbohydrateContent',
            'cholesterolContent',
            'fatContent',
            'fiberContent',
            'proteinContent',
            'saturatedContent',
            'servingSize',
            'sodiumContent',
            'sugarContent',
            'transFatContent',
            'unsaturatedFatContent'
        ], 'NutritionInformation'));
    }
}
