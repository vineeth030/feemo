<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TextPost extends Model
{
    use HasFactory;

    protected $fillable = ['text_content'];

    public function post()
    {
        return $this->morphOne(Post::class, 'content');
    }
}
