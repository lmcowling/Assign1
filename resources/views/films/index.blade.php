@extends('layout')
@section('content')
  <div class="pageTitle">
    <h1>All Films</h1>
  </div>
  <div class="pageBody">
    @foreach ($films as $film)
      <li>
        <a href="/films/{{ $film->id }}">{{ $film->title }}</a>
      </li>
    @endforeach
  </div>
@endsection
