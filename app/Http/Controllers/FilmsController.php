<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Films;

class FilmsController extends Controller
{
    public function filmIndex() // function that loads the film index page
    {
      $films = Films::all(); // grabs all the films from the database
      return view('films.index', compact('films')); // loads the view and takes the film array as a parameter
    }

    public function filmDetail($film_id) //function that loads the view of the selected films details
    {
      $film = Films::find($film_id); // grabs the results from the database
      return view('films.detail', compact('film')); // loads with view with the film details as a parameter
    }

    public function films($film_id) //
    {
      $film = Films::find($film_id); //
      return view('films.edit', compact('film')); //
    }

    public function filmEdit(Request $request, Films $film) //
    {
      $film->update($request->all()); //
      return view('films.detail', compact('film')); //
    }
}
