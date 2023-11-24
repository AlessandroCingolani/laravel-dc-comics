@extends('layouts.main')

@section('content')
    <h1>Modifica comic: {{ $comic->title }}</h1>

    <div class="row mb-4">
        <div class="col-8">
            <form action="{{ route('comics.update', $comic) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Nome Fumetto</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Immagine copertina</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data di vendita</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date"
                        value="{{ $comic->sale_date }}">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipologia</label>
                    <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
                </div>
                <div class="form-floating mb-5">
                    <textarea class="form-control" placeholder="Descrizione" id="description" name="description" style="height: 200px">{{ $comic->description }}</textarea>
                    <label for="floatingTextarea2">Descrizione</label>
                </div>
                <div class="form-floating mb-5">
                    <textarea class="form-control" placeholder="Artisti" id="artists" name="artists" style="height: 200px">{{ $comic->artists }}</textarea>
                    <label for="floatingTextarea2">Artisti</label>
                </div>
                <div class="form-floating mb-5">
                    <textarea class="form-control" placeholder="Scrittori" id="writers" name="writers" style="height: 200px">{{ $comic->writers }}</textarea>
                    <label for="floatingTextarea2">Scrittori</label>
                </div>

                <button type="submit" class="btn btn-primary">Invia</button>
                <button type="reset" class="btn btn-secondary">Annulla</button>

            </form>
        </div>
    </div>
@endsection
