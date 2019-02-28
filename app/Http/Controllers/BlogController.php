<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Navigation;

class BlogController extends Controller
{
    // Hope page of the blog.
    public function index() 
    {
        $data = array(
            'links' => Navigation::linksForContext('blog.index'),
        );
        
        $settings = $this->prepareSettings('blog.index');        
        
        return view('blog.index', $data, $settings);
    }
}
