<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    /**
     * Get the post that owns the comment.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }



    /**
     * Get the post that owns the comment.
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
    


    // Poisitions for the image within each subsection.
    public static $statuses = [
        'draft',
        'published'
    ];



    /*
     * Default columns fetched by the `filtered` query scope.
     */
    public static $defaultColumns = [
        'id', 
        'user_id', 
        'category_id',
        'title', 
        'slug',
        'excerpt', 
        'image', 
        'featured', 
        'created_at',
        'image_display' 
    ];



    #region Accessors and mutators.

    /**
     * Get Carbon formatted creation date of a post.
     * This is automatically called by Eloquent when a model is retrieved (i.e., mutator).
     *
     * @param  string  $value The timestamp stored in the database indicating the creation date.
     * @return array
     */
    public function getCreatedAtAttribute($value)
    {
          return array(
              'timestamp' => $value,
              'formatted' => Carbon::createFromTimeStamp(strtotime($value))->diffForHumans()
          );
    }

    #endregion

    

    #region Query scopes.

    /**
     * Query scope for post status.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param $status
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWithStatus($query, $status)
    {
        return $query->where('status', $status);
    }


    /**
     * Query scope for featured posts.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFeatured($query) {
        return $query->where('featured', 1);
    }


    /**
     * Get all posts matching a series for conditions.
     *
     * @param $query
     * @param null $userId
     * @param null $categoryId
     * @param null $howMany
     * @param array $columns
     * @param string $status
     * @param string $order
     * @return mixed
     */
    public function scopeFiltered($query, $userId = NULL, $categoryId = NULL, $howMany = NULL, $columns = NULL, $status = 'published', $order = 'desc')
    {
        return $query
            ->select($columns ?? self::$defaultColumns)
            ->withStatus($status)
            ->when($categoryId, function ($query) use ($categoryId) { return $query->where('category_id', $categoryId); })
            ->when($userId, function ($query) use ($userId) { return $query->where('user_id', $userId); })
            ->orderBy('created_at', $order)
            ->take($howMany)
            ->with(['User', 'Category']);
    }

    #endregion



    #region Specialized retrievers.

       /**
        * Fetch the next post (i.e., by creation date) from a specified
        * category, and excluding a specifed slug.
        *
        * @param  int  $categoryId The id of the category to select the next post from.
        * @param  string  $slug The slug of the post to be excluded.
     * @return mixed 
        */
    public static function pickNext(int $categoryId, string $slug) 
    {
       return static::select(['title', 'slug'])
           ->where([
               ['category_id', $categoryId], 
               ['slug', '<>', $slug]])
           ->withStatus('published')
           ->inRandomOrder()
           ->first();
    }
 
 
     /**
      * Get all published posts by a given user.
      *
      * @param $id
      * @return mixed
      */
    public static function byUser($id)
    {
        return static::filtered($id)->get();
    }
 
 
     /**
      * Get all published posts in a given category.
      *
      * @param $categoryId
      * @return mixed
      */
    public static function inCategory($categoryId)
    {
        return static::filtered(NULL, $categoryId)->get();
    }
 
 
     /**
      * Get all published posts.
      *
      * @return mixed
      */
    public static function allPublished()
    {
        return static::filtered()->get();
    }
     
     #endregion
}
