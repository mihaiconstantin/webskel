<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    // Roles a member have.
    public static $roles = [
        'member',
        'guest'
    ];


    // Genders a member have.
    public static $genders = [
        'male',
        'female',
        'other'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'context', 'order', 'show', 'created_at', 'updated_at'
    ];


    /**
     * Fetch all active rows from 'members' table.
     * @param string $context The page to which the data are displayed on.
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
