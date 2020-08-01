<?php namespace Magiczne\JsonLd\Components\Level3\WebPage;

use Magiczne\JsonLd\Components\Level2\CreativeWork\WebPage;

class ProfilePage extends WebPage
{
    public function componentDetails()
    {
        return [
            'name' => 'ProfilePage',
            'description' => 'https://schema.org/ProfilePage'
        ];
    }
}
