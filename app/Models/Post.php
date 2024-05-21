<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'movie_id', 'content_type', 'content_id'];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function content() : MorphTo
    {
        return $this->morphTo();
    }

    public function movie() : BelongsTo 
    {
        return $this->belongsTo(Movie::class);    
    }
}
