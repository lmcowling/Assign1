<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Films;
use App\Review;

class ReviewsController extends Controller
{
    public function add(Request $request, Films $film) // creates a new review using the text passed through and the film id through the review model and
    {
      $review = new Review($request->all());
      $film->addReview($review);
      return view('films.detail', compact('film'));
    }

    public function reviewDetail($review_id) // loads the review view with the id as a parameter
    {
      $review = Review::find($review_id);
      return view('reviews.detail', compact('review'));
    }

    public function reviewDelete(Request $request, Review $review) // function deletes the review with the id passed as a parameter
    {
      $review->delete($request->all());
      $films = Films::all();
      return view('films.index', compact('films'));
    }
}
