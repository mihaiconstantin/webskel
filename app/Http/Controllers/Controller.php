<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Models\Config;
use App\Models\Navigation;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    // Prepare key values pair configs.
    public function prepareConfigs($context) 
    {
        $configs = array_column(Config::activeFor($context), 'value', 'key');
        $activeLink = Navigation::activeLinkForContext($context);
        
        return array_merge($configs, ['activeLink' => $activeLink]);
    }
}
