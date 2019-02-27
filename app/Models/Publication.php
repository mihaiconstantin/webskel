<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    // Publication statuses.
    public static $publicationStatuses = [
        'in press',
        'submitted',
        'accepted'
    ];


    /**
     * Fetch all active rows from 'publications' table.
     * @param string $context The page to which the publications are displayed on.
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
