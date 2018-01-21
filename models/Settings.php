<?php 

namespace QNSolutions\FacebookFeed\Models;

use Model;

class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'qnsolutions_facebookfeed_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';
}