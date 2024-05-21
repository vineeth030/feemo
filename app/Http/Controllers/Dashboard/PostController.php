<?php

namespace App\Http\Controllers\Dashboard;

use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function index() : Response {
        
        return Inertia::render('Dashboard',[
            'posts' => Post::with(['content','movie','user'])->get()
        ]);
    }
}
