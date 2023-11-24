@extends('layouts.main')

@section('content')
    <h1>{{ $comic->title }}
        <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning"> <i class="fa-solid fa-pencil"></i></a>
        @include('partials.formDelete')
    </h1>

    <div class="row">
        <div class="col-3">
            <img class="img-fluid" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        </div>
        <div class="col">
            <p><strong>Series:</strong> {{ $comic->series }}</p>
            <p><strong>Sale date:</strong> {{ $comic->sale_date }}</p>
            <p><strong>Artists:</strong> {{ $comic->artists }}</p>
            <p><strong>Writers:</strong> {{ $comic->writers }}</p>
            <p><strong>Price:</strong> {{ $comic->price }}</p>
            <strong> Description:</strong>
            <p>
                {!! $comic->description !!}
            </p>
            <a href="javascript:history.back()" class="btn btn-primary">Torna alla pagina precedente</a>
        </div>
    </div>
@endsection
