<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ExternalLink;

class ContactInfo extends Model
{
	/**
     * Get all the external links for a given contact info box.
     */
    public function externalLinks() 
    {
        return $this->belongsToMany(ExternalLink::class);
    }


    /**
     * Fetch all active rows from 'contact_infos' table.
     * @param string $context The page to which the data is displayed on.
     * @return array
     */
    public static function activeFor($context)
    {
        return self::where([
            ['show', 1],
            ['context', $context]
        ])->with('externalLinks')->first();
    }
}
