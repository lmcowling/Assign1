<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Films extends Model
{
    public function review()
    {
      return $this->hasMany(Review::class);
    }

    public function addReview(Review $review)
    {
      return $this->review()->save($review);
    }
}
