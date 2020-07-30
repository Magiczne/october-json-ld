<?php namespace Magiczne\JsonLd;

use Magiczne\JsonLd\Components\Thing;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            Thing::class => 'Thing'
        ];
    }
}
