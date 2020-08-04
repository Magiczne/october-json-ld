<?php namespace Magiczne\JsonLd\Models;

use Model;

class Settings extends Model
{
    public $implement = [
        'System.Behaviors.SettingsModel'
    ];

    public $settingsCode = 'magiczne_jsonld_settings';

    public $settingsFields = 'fields.yaml';
}
