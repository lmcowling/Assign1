@extends('layout')
@section('content')
  <form method="POST" action="/films/{{ $film->id }}/edit">
    {{ method_field('PATCH')}}
    {{ csrf_field() }}
    <div>
      <textarea name="title">{{ $film->title }}</textarea>
    </div>
    <div>
      <button type="submit">Edit film</button>
    </div>
    {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
  </form>
@stop
