@extends('layout')
@section('content')
  <div class="pageTitle">
    <h1>Search Results</h1>
  </div>
  <div class="pageBody">

    @if($films->isEmpty())
      <li>0 results</li>
    @else
      <?php
      $filmCount = count($films);
      ?>
      <h3>{{ $filmCount }} results</h3>
      @foreach ($films as $film) {{-- foreach to echo a list of the films in the 'films' table --}}
        <li>
          <a href="/films/{{ $film->id }}">{{ $film->title }}</a>
        </li>
      @endforeach
    @endif
  </div>
@endsection
