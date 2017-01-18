@extends('layout')
@section('content')
  <h1>{{ $film->title }}</h1>
  <ul>
    @foreach ($film->review as $review)
      <a href="{{ $review->id }}">{{ $review->body }}</a>
    @endforeach
  </ul>
@stop
