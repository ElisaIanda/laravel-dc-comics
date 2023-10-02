@extends('layouts.public')

@section('content')
    <div class="container my-4 py-5">
        <div class="d-flex flex-column gap-3">

            <form action="{{ route('comics.store') }}" method="POST">
                @csrf()

                <label for="title" class="form-label">Titolo</label>
                <input type="text" name="title" class="form-control" placeholder="Batman">

                <label for="description" class="form-label">Descrizione</label>
                <textarea name="description" class="form-control" placeholder="Descrizione Batman"></textarea>

                <label for="thumb" class="form-label">Immagine di Copertina</label>
                <input type="text" name="thumb" class="form-control"
                    placeholder="https://mycomics.it/wp-content/uploads/sites/16/2023/08/FUMBDCASC0001.jpg">

                <label for="price" class="form-label">Prezzo</label>
                <input type="number" name="price" id="price" class="form-control" placeholder="19.00">

                <label for="series" class="form-label">Serie</label>
                <input type="text" name="series" class="form-control" placeholder="Nome serie">

                <label for="date" class="form-label">Data</label>
                <input type="date" name="sale_date" class="form-control">

                <label for="type" class="form-label">Tipo</label>
                <input type="text" name="type" class="form-control" placeholder="Tipo">

                <label for="artists" class="form-label">Artisti</label>
                <input type="text" name="artists" class="form-control" placeholder="Artisti">

                <label for="writers" class="form-label">Scrittori</label>
                <input type="text" name="writers" class="form-control" placeholder="Scrittori">


                <div class="d-flex justify-content-between">
                    <button class="btn btn-primary mt-5 mb-4 px-5 fw-bold">Aggiungi</button>
                    <button class="btn bg-danger mt-5 mb-4 px-5 fw-bold">
                        <a class="text-white" href="{{ route('comics.index') }}">Annulla</a>
                    </button>
                </div>
            </form>

        </div>
    </div>
@endsection
