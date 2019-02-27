<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Models\Setting;
use App\Models\Navigation;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    // Prepare key values pair settings.
    public function prepareSettings($context) 
    {
        $settings = array_column(Setting::activeFor($context), 'value', 'key');
        $activeLink = Navigation::activeLinkForContext($context);
        
        return array_merge($settings, ['activeLink' => $activeLink]);
    }
}
