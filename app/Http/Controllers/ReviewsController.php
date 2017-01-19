<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Films;
use App\Review;

class ReviewsController extends Controller
{
    public function add(Request $request, Films $film)
    {
      $review = new Review($request->all());
      // $review->body = $request->body;
      // $reivew->films_id = $film->id;
      // $review->save();
      $film->addReview($review);

      return view('films.detail', compact('film'));
    }
}
