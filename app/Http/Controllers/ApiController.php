<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class ApiController extends Controller
{
    /**
     * Fetch all published blog posts.
     *
     * @return Post[]
     */
    public function posts() 
    {
        return Post::allPublished();
    }



    /**
     * Fetch all published blog posts for a given user id.
     *
     * @param $id
     * @return Post[]
     */
    public function author($id)
    {
        return Post::byUser($id);
    }



    /**
     * Fetch all published blog posts for a given category slug.
     *
     * @param $slug
     * @return Post[]
     */
    public function category($slug)
    {
        $categoryId = Category::identifySlug($slug);
        return Post::inCategory($categoryId);
    }
}
