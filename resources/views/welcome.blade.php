@extends('layouts.app')

@section('content')
    <h1 class="text-white text-center fw-bolder py-4">I miei film:</h1>
    <div class="container py-3">
        <div class="row row-cols-3">
            @foreach ($movies as $movie)
            <div class="col mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ $movie->image }}" alt="">
                    <div class="card-body">
                        <div class="card-title fs-3 fw-bolder text-center">
                            {{ $movie->title }}
                            ({{ $movie->original_title }})
                        </div>
                        <div class="card-text text-center">
                            <p class="text-success">
                                {{ $movie->vote }} (su 10)
                            </p>
                            <p class="text-primary"> 
                                Nationality: {{ $movie->nationality }} 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection