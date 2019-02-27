<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Link;

class Navigation extends Model
{   
	/**
     * Get all the links for a given navigation.
     */
    public function links() 
    {
        return $this->belongsToMany(Link::class);
    }



    /**
     * Fetch the active link text for a context.
     * 
     * @param string $context The page on which the navigation is displayed on.
     * @return string
     */
    public static function activeLinkForContext($context)
    {
        return self::select("active_link")->where('context', $context)->pluck('active_link')->first();
    }
    


	/**
     * Fetch all links for a context.
     * 
     * @param string $context The page on which the navigation is displayed on.
     * @return array
     */
    public static function linksForContext($context)
    {
        return self::where('context', $context)->first()->links()->get();
    }
}
