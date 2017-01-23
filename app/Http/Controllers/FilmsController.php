<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Films;

class FilmsController extends Controller
{
    public function filmIndex() // function that loads the film index page with an array of all the films as a parameter
    {
      $films = Films::all();
      return view('films.index', compact('films'));
    }

    public function filmDetail($film_id) // function that loads the view of the selected film's details
    {
      $film = Films::find($film_id);
      return view('films.detail', compact('film'));
    }

    public function films($film_id) // function that loads the edit page
    {
      $film = Films::find($film_id);
      return view('films.edit', compact('film'));
    }

    public function filmEdit(Request $request, Films $film) // function updates the database with the request parameters
    {
      $film->update($request->all());
      return view('films.detail', compact('film'));
    }

    public function filmSearch(Request $request) // function searches the film table for results matching the input
    {
      $search = $request->title;
      $films = Films::where('title', 'LIKE', "%$search%")->get();
      return view('films.results', compact('films'));
    }
}
