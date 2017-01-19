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

    public function films($film_id)
    {
      $film = Films::find($film_id);
      return view('films.edit', compact('film'));
    }

    public function filmEdit(Request $request, Films $film)
    {
      $film->update($request->all());
      return view('films.detail', compact('film'));
    }

    public function filmDelete(Films $film)
    {
      $film->delete($request->all());
      $films = Films::all();
      return view('films.index', compact('films'));
    }
}
