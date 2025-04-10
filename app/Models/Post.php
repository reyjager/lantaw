<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $primaryKey = 'post_id';
    protected $fillable = ['title', 'content', 'user_id'];



    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class); // If you have a category relationship
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class); // Many-to-many with tags
    }


    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id', 'post_id'); // Ensure correct foreign key
    }
}
