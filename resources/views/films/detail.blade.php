@extends('layout')
@section('content')
  <h1>{{ $film->title }}</h1>
  <ul>

    @foreach ($film->review as $review)
      <li>{{ $review->body }}</li>
    @endforeach
  </ul>
  <hr>
  <h3>Add review</h3>
  <form method="POST" action="/films/{{ $film->id }}/reviews">
    <div>
      <textarea name="body"></textarea>
    </div>
    <div>
      <button type="submit">Add review</button>
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  </form>
@stop
