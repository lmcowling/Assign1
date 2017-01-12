@extends('layout')
@section('content')
  <h1>All Films</h1>
  @foreach ($films as $film)
    <div>
      {{ $film->title }}
    </div>
  @endforeach
@stop
