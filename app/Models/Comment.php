<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['content', 'user_id', 'post_id'];

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id', 'post_id'); // A comment belongs to a post

    }

    public function user()
    {
        return $this->belongsTo(User::class); // A comment belongs to a user (author)
    }
}
