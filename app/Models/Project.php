<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * Fetch all active rows from 'projects_sections' table.
     * @param string $context The page to which the carousels is displayed on.
     * @return array
     */
    public static function activeFor($context)
    {
        return self::where([
            ['show', 1],
            ['context', $context]
        ])->orderBy('order', 'asc')->get();
    }
}
