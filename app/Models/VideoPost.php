<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoPost extends Model
{
    use HasFactory;

    protected $fillable = ['url'];

    public function post()
    {
        return $this->morphOne(Post::class, 'content');
    }
}
