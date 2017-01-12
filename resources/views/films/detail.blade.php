@extends('layout')
@section('content')
  <h1>{{ $film->title }}</h1>
  <ul>
    @foreach ($film->review as $review)
      <li>{{ $review->body }}</li>
    @endforeach
  </ul>
@stop
