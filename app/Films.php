<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Films extends Model
{
  protected $fillable  = ['title']; // allows only the body to be changed.

  public function review() // setting the review table relationship with the film table
  {
    return $this->hasMany(Review::class);
  }

  public function addReview(Review $review) //function to save the new review. Used in the review controller
  {
    return $this->review()->save($review);
  }

}
