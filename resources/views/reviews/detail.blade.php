@extends('layout')
@section('content')
  <div class="pageTitle">
    <h1>Delete Review</h1>
  </div>
  <div class="pageBody">
    <h3>{{ $review->body }}</h3>
    @if (Auth::guest())
      <h4>Login to delte a review</h4>
    @else
    <form method="POST" action="/reviews/{{ $review->id }}/delete">
      <button type="submit">Delete review</button>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
    @endif
  </div>
@endsection
