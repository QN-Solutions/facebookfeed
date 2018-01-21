<?php namespace QNSolutions\FacebookFeed;

use App;
use System\Classes\PluginBase;
use Illuminate\Foundation\AliasLoader;

/**
 * FacebookFeed Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'FacebookFeed',
            'description' => 'Provides a Facebook feed import',
            'author'      => 'QN-Solutions',
            'icon'        => 'icon-leaf'
        ];
    }

	public function registerComponents(){
		return [
			'\QN-Solutions\FacebookFeed\Components\FacebookFeed' => 'facebookfeed'
		];
	}


     public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'Facebook',
                'description' => 'Manage Facebook settings.',
                'category'    => 'Social Media',
                'class'       => 'QN-Solutions\FacebookFeed\Models\Settings',
                'order'       => 100
            ]
        ];
    }
}