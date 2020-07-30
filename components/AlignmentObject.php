<?php namespace Magiczne\JsonLd\Components;

class AlignmentObject extends Intangible
{
    public function componentDetails()
    {
        return [
            'name' => 'AlignmentObject',
            'description' => 'https://schema.org/AlignmentObject'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'alignmentType',
            'educationalFramework',
            'targetDescription',
            'targetName',
            'targetUrl'
        ], 'AlignmentObject'));
    }
}
