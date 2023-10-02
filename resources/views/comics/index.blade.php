@extends('layouts.public')

@section('content')
    <div class="container pt-5">
        
        <div class="row">
            @foreach ($comics as $singleComic)
                <div class="col-2">
                    <div class="card h-100">
                        <a href="{{ route('comics.show', $singleComic->id) }}">
                            <img src="{{ $singleComic['thumb'] }}" class="card-img-top" alt="">
                        </a>
                        <div class="card-body px-0">
                            <p class="card-text">{{ strtoupper($singleComic['series']) }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="text-center mb-5">

                <a class="btn btn-success fw-bold" href="{{ route('comics.create') }}"
                role="button">AGGIUNGI COMIC</a>

                <a class="btn btn-primary my-3 fw-bold " href="#" role="button">LOAD MORE</a>
            </div>
        </div>
    </div>
    @include('partials.main')
@endsection
