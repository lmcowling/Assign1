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
  </div>
@endsection
