<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Navigation;
use App\Models\Carousel;
use App\Models\About;
use App\Models\Project;
use App\Models\Publication;
use App\Models\Presentation;
use App\Models\ContactInfo;


class HomeController extends Controller
{
    /**
     * Fetch the data for all sections on the landing page at once.
     *
     * @return array
     */
    public function index() 
    {
        $data = array(
            'links'         => Navigation::linksForContext('home.index'),
            'carousel'      => Carousel::activeFor('home.index'),
            'about'         => About::activeFor('home.index'),
            'projects'      => Project::activeFor('home.index'),
            'publications'  => Publication::activeFor('home.index'),
            'presentations' => Presentation::activeFor('home.index'),
            'contact'       => ContactInfo::activeFor('home.index')
        );
        
        $settings = $this->prepareSettings('home.index');        
        
        return view('home.index', $data, $settings);
    }
}
