<?php namespace Magiczne\JsonLd\Components\Level3\Comment;

use Magiczne\JsonLd\Components\Level2\CreativeWork\Comment;

class Answer extends Comment
{
    public function componentDetails()
    {
        return [
            'name' => 'AudioObject',
            'description' => 'https://schema.org/AudioObject'
        ];
    }
}
