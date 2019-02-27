<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    /**
     * Fetch all rows from 'settings' table.
     * @param string $context The page on which the settings are applied.
     * @return array
     */
    public static function activeFor($context)
    {
        return self::select('key', 'value')
            ->where('context', $context)
            ->orWhere('context', 'all')
            ->get()
            ->toArray();
    }
}
