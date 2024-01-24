@extends('layouts.app')

@section('content')
    <div class="container d-flex flex-wrap justify-content-center align-items-center mt-5 gap-3">
        @foreach ($movies as $movie)
            @include('partials.card' , ["title" => $movie->title, 'originalTitle' => $movie->original_title, 'nationality' => $movie->nationality, 'date' => $movie->date, 'vote' => $movie->vote])
        @endforeach
    </div>
@endsection