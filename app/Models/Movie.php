<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'release_date',
        'poster',
    ];

    protected function posterUrl(): Attribute 
    {
        return Attribute::make(
            get: fn (string $poster) => asset('strorage/posters/' . $poster),
        );
    }
}
