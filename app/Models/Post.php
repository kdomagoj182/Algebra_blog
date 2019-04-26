<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
	
	use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'content', 'image', 'user_id'];
	
	 /**
     * Save new Post.
     *
     * @param array $data
	 * @return Post
     */
	 
	public function savePost($data)
	 {
		 return $this->create($data);  # istovremeno vraća podatke koji su upisani u bazu
	 }
	
	 /**
     * Update new Post.
     *
     * @param array $data
	 * @return void
     */
	 
	public function updatePost($data)
	 {
		$this->update($data);  # update posta
	 }
	 
	 ################# Begin relations ####################
	 /**
     * Get the author that wrote the post.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
	 ################# End relations ######################
	
}
