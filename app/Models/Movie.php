<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'release_date',
        'poster',
    ];

    public function directors()
    {
        return $this->belongsToMany(Crew::class)->where('role', 'director');
    }
    public function writers()
    {
        return $this->belongsToMany(Crew::class)->where('role', 'writer');
    }
    public function producers()
    {
        return $this->belongsToMany(Crew::class)->where('role', 'producer');
    }
    public function cast()
    {
        return $this->belongsToMany(Crew::class)->where('role', 'cast');
    }

    public function posts() : HasMany
    {
        return $this->hasMany(Post::class);    
    }
    
    public function textPosts() : HasMany
    {
        return $this->hasMany(Post::class)->where('content_type', 'App\Models\TextPost');    
    }
    public function videoPosts() : HasMany
    {
        return $this->hasMany(Post::class)->where('content_type', 'App\Models\VideoPost');    
    }
}
