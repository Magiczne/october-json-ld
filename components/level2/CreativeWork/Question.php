<?php namespace Magiczne\JsonLd\Components\Level2\CreativeWork;

use Magiczne\JsonLd\Components\Level1\CreativeWork;

class Question extends CreativeWork
{
    public function componentDetails()
    {
        return [
            'name' => 'Question',
            'description' => 'https://schema.org/Question'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'acceptedAnswer',
            'answerCount',
            'downvoteCount',
            'suggestedAnswer',
            'upvoteCount'
        ], 'Question'));
    }
}
