<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    /**
     * Fetch all rows from 'configs' table.
     * @param string $context The page on which the configs are applied.
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
