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
      $film->addReview($review);
      return view('films.detail', compact('film'));
    }

    public function reviewDetail($review_id)
    {
      $review = Review::find($review_id);
      return view('reviews.detail', compact('review'));
    }

    public function reviewDelete(Request $request, Review $review)
    {
      $review->delete($request->all());
      $films = Films::all();
      return view('films.index', compact('films'));
    }
}
