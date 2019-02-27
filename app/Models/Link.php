<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Navigation;

class Link extends Model
{
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'pivot', 'created_at', 'updated_at'
    ];


    /**
     * Get all the navigations using the given link.
     */
    public function navigations()
    {
        return $this->belongsToMany(Navigation::class);
    }
}
