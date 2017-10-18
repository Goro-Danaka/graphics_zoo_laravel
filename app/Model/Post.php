<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

	//
	public function getPosts()
    {
        $posts = Post::all()->limit(3)->orderBy('created', 'desc');    
        return $posts;
    }

    protected $table = 'posts';
}
