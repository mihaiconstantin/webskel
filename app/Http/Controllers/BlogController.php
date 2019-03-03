<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Navigation;
use App\Models\Post;

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


    // Post page of the blog.
    public function post($slug) 
    {
        $post = Post::where('slug', '=', '$slug')->firstOrFail();
        $post->next = Post::pickNext($post->category->id, $post->slug);

        $data = array(
            'links' => Navigation::linksForContext('blog.index'),
            'post' => $post
        );
        
        $settings = $this->prepareSettings('blog.index');        

        return view('blog.post', $data, $settings);
    }
}

