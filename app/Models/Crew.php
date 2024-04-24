<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crew extends Model
{
    use HasFactory;

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function directors()
    {
        return $this->roles()->where('name', 'director');
    }

    public function writers()
    {
        return $this->roles()->where('name', 'writer');
    }

    public function producers()
    {
        return $this->roles()->where('name', 'producer');    
    }

    public function cast()
    {
        return $this->roles()->where('name', 'cast');    
    }
}
