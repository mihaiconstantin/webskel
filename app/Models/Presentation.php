<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Presentation extends Model
{
    /**
     * Fetch all active rows from 'presentations' table.
     * @param string $context The page to which the data is displayed on.
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
