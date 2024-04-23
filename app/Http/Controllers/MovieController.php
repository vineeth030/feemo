<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Inertia\Inertia;
use Inertia\Response;

class MovieController extends Controller
{
    public function index() : Response {

        return Inertia::render('Home',[
            'movies' => Movie::select(['id', 'title', 'poster', 'release_date'])->selectRaw('YEAR(release_date) as year')->get()
        ]);
        
    }

    public function show($id) : Response {
        return Inertia::render('Movie',[
            'movie' => Movie::select(['id','title', 'poster', 'release_date'])->selectRaw('YEAR(release_date) as year')->where('id', $id)->first()
        ]);
    }
}
