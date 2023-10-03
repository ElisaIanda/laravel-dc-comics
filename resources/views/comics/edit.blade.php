@extends('layouts.public')

@section("title", "Modifica Comic")
@section('content')
    <div class="container my-4 py-5">
        <div class="d-flex flex-column gap-3">

            <form action="{{ route('comics.update', $comics->id) }}" method="POST">
                @csrf()

                @method('put')

                <label for="title" class="form-label">Titolo</label>
                <input type="text" name="title" value="{{ old('title', $comics->title)}}" class="form-control" placeholder="Batman">

                <label for="description" class="form-label">Descrizione</label>
                <textarea name="description" class="form-control" placeholder="Descrizione Batman">{{ old('description', $comics->description)}}</textarea>

                <label for="thumb" class="form-label">Immagine di Copertina</label>
                <input type="text" name="thumb" value="{{ old('thumb', $comics->thumb)}}" class="form-control"
                    placeholder="https://mycomics.it/wp-content/uploads/sites/16/2023/08/FUMBDCASC0001.jpg">

                <label for="price" class="form-label">Prezzo</label>
                <input type="number" name="price" value="{{ old('price', $comics->price)}}" class="form-control" placeholder="19.00">

                <label for="series" class="form-label">Serie</label>
                <input type="text" name="series" value="{{ old('series', $comics->series)}}" class="form-control" placeholder="Nome serie">

                <label for="date" class="form-label">Data</label>
                <input type="date" name="sale_date" value="{{ old('sale_date', $comics->sale_date)}}" class="form-control">

                <label for="type" class="form-label">Tipo</label>
                <input type="text" name="type" value="{{ old('type', $comics->type)}}" class="form-control" placeholder="Tipo">

                <label for="artists" class="form-label">Artisti</label>
                <input type="text" name="artists" value="{{ old('artists', implode(",",$comics->artists))}}" class="form-control" placeholder="Artisti">

                <label for="writers" class="form-label">Scrittori</label>
                <input type="text" name="writers" value="{{ old('writers', implode(",", $comics->writers))}}" class="form-control" placeholder="Scrittori">


                <div class="d-flex justify-content-between">
                    <button class="btn btn-primary mt-5 mb-4 px-5 fw-bold">Modifica</button>
                    <button class="btn bg-danger mt-5 mb-4 px-5 fw-bold">
                        <a class="text-white" href="{{ route('comics.index') }}">Annulla</a>
                    </button>
                </div>
            </form>

        </div>
    </div>
@endsection
