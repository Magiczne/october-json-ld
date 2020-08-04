<?php namespace Magiczne\JsonLd\Components\Level2\CreativeWork;

use Magiczne\JsonLd\Components\Level1\CreativeWork;

class Comment extends CreativeWork
{
    public function componentDetails()
    {
        return [
            'name' => 'Comment',
            'description' => 'https://schema.org/Comment'
        ];
    }

    public function defineProperties()
    {
        return array_merge(parent::defineProperties(), $this->generateProperties([
            'downvoteCount',
            'parentItem',
            'upvoteCount'
        ], 'Comment'));
    }
}
