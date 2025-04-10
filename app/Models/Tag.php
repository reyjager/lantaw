<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// In the Tag model:
class Tag extends Model
{
    public function posts()
    {
        return $this->belongsToMany(Post::class); // Many-to-many with posts
    }
}