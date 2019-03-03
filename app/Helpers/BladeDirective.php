<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Blade;


class BladeDirective
{
    /**
     * Register directive used for evaluating potentially unset variables.
     *
     * @param $directiveName
     */
    public static function registerTry($directiveName)
    {
        Blade::directive($directiveName, function ($variable) {
            return "<?php echo ($variable ?? 'undefined'); ?>";
        });
    }
}