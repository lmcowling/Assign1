@extends('layout')
@section('content')
  <div class="pageTitle">
    <h1>All Films</h1>
  </div>
  <div class="pageBody">
    @foreach ($films as $film)  {{-- foreach to echo a list of the films in the 'films' table --}}
      <li>
        <a href="/films/{{ $film->id }}">{{ $film->title }}</a>
      </li>
    @endforeach
    @if (Auth::guest())
      <h4>Login to add a film</h4>
    @else
      <form method="POST" action="/films/addFilm"> {{-- form to post the add page--}}
        <div>
          <button type="submit">Add Film</button>
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
      </form>
    @endif
  </div>
@endsection
