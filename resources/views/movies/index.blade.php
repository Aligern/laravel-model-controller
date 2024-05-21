@extends('layouts.app')

@section('title')
    Movies
@endsection
 
@section('main')

    @foreach ( $movies as $movie)

        <h1>{{ $movie->title }}</h1>

        <p>{{ $movie->language }}</p>
        <br>
        <p>{{ $movie->date }}</p>
        <br>
        <p>{{ $movie->vote }}</p>


    @endforeach

@endsection