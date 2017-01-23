@extends('layout')
@section('content')
  <div class="pageTitle">
    <h1>Edit Film</h1>
  </div>
  <div class="pageBody">
    <form method="POST" action="/films/{{ $film->id }}/edit"> {{-- form that takes the text and id to update(patch) the film table --}}
      {{ method_field('PATCH')}}
      {{ csrf_field() }}
      <textarea name="title">{{ $film->title }}</textarea>
      <button type="submit">Edit film</button>
    </form>
  </div>
@endsection
