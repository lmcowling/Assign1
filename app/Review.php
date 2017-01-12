<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable  = ['body']; // allows only the body to be changed.

    public function films()
    {
      return $this->belongsTo(Films::class);
    }
}
