<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Inertia\Inertia;
use Inertia\Response;

class MovieController extends Controller
{
    public function index() : Response {

        return Inertia::render('Home',[
            'movies' => Movie::select(['id', 'slug', 'title', 'poster', 'release_date'])
                            ->with(['directors', 'producers', 'writers', 'cast'])    
                            ->selectRaw('YEAR(release_date) as year')->get()
        ]);
        
    }

    public function show($slug) : Response {

        return Inertia::render('Movie',[
            'movie' => Movie::select(['id','title', 'poster', 'release_date'])
                        ->with(['directors', 'producers', 'writers', 'cast', 'posts', 'posts.content'])
                        ->selectRaw('YEAR(release_date) as year')
                        ->where('slug', $slug)->first()
        ]);
    }
}
