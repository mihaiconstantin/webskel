<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    // Directions from which the about subsections fade in.
    public static $animations = [
        'off',
        'fade',
        'fade-up',
        'fade-down',
        'fade-left',
        'fade-right',
        'fade-up-right',
        'fade-up-left',
        'fade-down-right',
        'fade-down-left',
        'flip-up',
        'flip-down',
        'flip-left',
        'flip-right',
        'slide-up',
        'slide-down',
        'slide-left',
        'slide-right',
        'zoom-in',
        'zoom-in-up',
        'zoom-in-down',
        'zoom-in-left',
        'zoom-in-right',
        'zoom-out',
        'zoom-out-up',
        'zoom-out-down',
        'zoom-out-left',
        'zoom-out-right'
    ];


    // Positions for the image within each subsection.
    public static $imagePositions = [
        'left',
        'right'
    ];


    /**
     * Fetch all active rows from 'about_sections' table.
     * @param string $context The page to which the carousels is displayed on.
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
