<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Films;

class FilmsController extends Controller
{
    public function filmIndex()
    {
      $films = Films::all();
      return view('films.index', compact('films'));
    }

    public function filmDetail($film_id)
    {
      $film = Films::find($film_id);

      return view('films.detail', compact('film'));
    }
}
