@extends('layout')
@section('content')
  <h1>{{ $film->title }}</h1>
  <form method="POST" action="/films/{{ $film->id }}/filmsEdit">
    <button type="submit">Edit film</button>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  </form>

  <form method="POST" action="/films/{{ $film->id }}/delete">
    {{-- {{ method_field('PATCH')}} --}}
    {{-- {{ csrf_field() }} --}}
    <button type="submit">Delete film</button>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  </form>

  <hr>
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
