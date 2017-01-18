@extends('layout')
@section('content')
  <h1>All Films</h1>
  @foreach ($films as $film)
    <div>
      <a href="/films/{{ $film->id }}">{{ $film->title }}</a>
    </div>
  @endforeach
@stop
