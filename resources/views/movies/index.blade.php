@extends('layouts.app')

@section('title')
    Movies
@endsection
 
@section('main')
<div class="container row align-content-center">
    @foreach ( $movies as $movie)
    <div class=" col-12 col-md-3 col-lg-4">
        <div class="card" style="width: 18rem;">
        <img src="{{ $movie->image }}" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $movie->title }}
                </h5>
                <p class="card-text">
                    {{ $movie->language }}
                </p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    {{ $movie->date }}
                </li>
                <li class="list-group-item">
                    {{ $movie->vote }}
                </li>
            </ul>
        </div>
    </div>
    @endforeach
</div>
@endsection