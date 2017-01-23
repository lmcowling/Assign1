@extends('layout')
@section('content')
  <div class="pageTitle">
    <h1>Add Film</h1>
  </div>
  <div class="pageBody">
    <form method="POST" action="/films/add"> {{-- form that adds to the film table --}}
      {{ csrf_field() }}
      <textarea name="title"></textarea>
      <button type="submit">Add film</button>
    </form>
  </div>
@endsection
