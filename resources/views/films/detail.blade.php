@extends('layout')
@section('content')
  <div class="pageTitle">
    <h1>{{ $film->title }}</h1>
    <form method="POST" action="/films/{{ $film->id }}/filmsEdit"> {{-- form to post the film id to the edit film page --}}
      @if (Auth::guest())
        <h4>Login to edit a film</h4>
      @else
        <button type="submit">Edit film</button>
      @endif
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
  </div>
  <div class="pageBody">
    <h3>Reviews</h3>
    <ul>
      @foreach($film->review as $review) {{-- foreach to echo all reviews for chosen film --}}
        <li>
          <a href="/reviews/{{ $review->id }}">{{ $review->body }}</a>
        </li>
      @endforeach
    </ul>
    <h3>Add review</h3>
    @if (Auth::guest())
      <h4>Login to add a review</h4>
    @else
      <form method="POST" action="/films/{{ $film->id }}/reviews"> {{-- form to post the film id so the review can be added to the correct table --}}
        <div>
          <textarea name="body"></textarea>
        </div>
        <div>
          <button type="submit">Add review</button>
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
      </form>
    @endif
  </div>
@endsection
