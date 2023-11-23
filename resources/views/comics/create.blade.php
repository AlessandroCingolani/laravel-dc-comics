@extends('layouts.main')

@section('content')
    <h1>Inserimento nuovo fumetto</h1>

    <div class="row mb-4">
        <div class="col-8">
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Nome Fumetto</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Immagine copertina</label>
                    <input type="text" class="form-control" id="thumb" name="thumb">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" name="series">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data di vendita</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipologia</label>
                    <input type="text" class="form-control" id="type" name="type">
                </div>
                <div class="form-floating mb-5">
                    <textarea class="form-control" placeholder="Descrizione" id="description" name="description" style="height: 200px"></textarea>
                    <label for="floatingTextarea2">Descrizione</label>
                </div>
                <div class="form-floating mb-5">
                    <textarea class="form-control" placeholder="Artisti" id="artists" name="artists" style="height: 200px"></textarea>
                    <label for="floatingTextarea2">Artisti</label>
                </div>
                <div class="form-floating mb-5">
                    <textarea class="form-control" placeholder="Scrittori" id="writer" name="writers" style="height: 200px"></textarea>
                    <label for="floatingTextarea2">Scrittori</label>
                </div>

                <button type="submit" class="btn btn-primary">Invia</button>
                <button type="reset" class="btn btn-secondary">Annulla</button>

            </form>
        </div>
    </div>
@endsection
