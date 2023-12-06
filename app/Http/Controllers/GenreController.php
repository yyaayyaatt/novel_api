<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genre = Genre::latest()->paginate(10);
        return [
            "status" => 1,
            "data" => $genre
        ];
    }

    public function show(Genre $genre)
    {
        return [
            "status" => 1,
            "data" =>$genre
        ];
    }
}
