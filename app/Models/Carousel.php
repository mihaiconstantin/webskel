<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    /**
     * Fetch all active rows from 'carousels' table.
     * @param string $context The page to which the data is displayed on.
     * @return array
     */
    public static function activeFor($context)
    {
        return self::where([
            ['show', 1],
            ['context', $context]
        ])->first();
    }
}
