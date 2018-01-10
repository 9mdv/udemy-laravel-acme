<?php

namespace G11v8a\Resources;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'G11v8a',
            'description' => 'Provides battle resources',
            'author' => 'Glenn Michael',
            'icon' => 'icon-leaf'
        ];
    }

    public function registerComponents()
    {
        return [
            'G11v8a\Resources\Components\Links' => 'resourcesLinks'
        ];
    }
}

