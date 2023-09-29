@extends("layouts.public")

@section("content") 
<div class="container my-5">
    <a href={{ route("comics.index", ["id" => $comics->id]) }} class="btn btn-outline-primary my-4 text-white">Indietro</a>
    <div class="card my-3" >
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ $comics->thumb }}" alt="{{ $comics->series }}" class="w-100">
            </div>
            <div class="col-md-8">
                <div class="card-body h-100 py-0">
                    <h5 class="card-title">{{ $comics->title }}</h5>
                    <p class="card-text">{{ $comics->description }}</p>
                    
                    <div class="row">
                        <div class="col-6">
                            <div class="py-2">
                                <b>Scrittori</b>
                            </div>
                            {{ str_replace(['[', ']'], ' ', $comics['writers']) }}
                        </div>
                        <div class="col-6">
                            <div class="py-2">
                                <b>Artisti</b>
                            </div>
                            {{ str_replace(['[', ']'], ' ', $comics['artists']) }}
                        </div>
                    </div>

                    <div class="row my-4 gap-2">
                        <small class="text-white"><b>Prezzo:</b> {{ $comics->price}}€</small>
                        <small class="text-white"><b>Serie:</b> {{ $comics->series}}</small>
                        <small class="text-white"><b>Tipo:</b> {{ $comics->type}}</small>
                        <small class="text-white"><b>Uscita:</b> {{ $comics->sale_date}}</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection