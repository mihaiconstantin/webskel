<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\ContactInfo;

class ExternalLink extends Model
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
     * Get all the contact info boxes using the given link.
     */
    public function contactInfos()
    {
        return $this->belongsToMany(ContactInfo::class);
    }
}
