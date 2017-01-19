@extends('layout')
@section('content')
  <h3>{{ $review->body }}</h3>
  <hr>
  <form method="POST" action="/reviews/{{ $review->id }}/delete">
    <div>
      <button type="submit">Delete review</button>
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  </form>
@stop
