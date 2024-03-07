<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'author';

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class, 'author_id');
    }

    public function getAuthorPosts(): array
    {
        return $this->posts()->get()->toArray();
    }
}
