@extends('layouts.main')

@section('content')
    <div class="container w-75">

        <h1>{{ $comic->title }}</h1>

        <div class="row">
            <div class="col">
                <img class="img-fluid w-25" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            </div>
        </div>
        <div class="row  my-2">
            <p><strong>Series:</strong> {{ $comic->series }}</p>
            <p><strong>Sale date:</strong> {{ $comic->sale_date }}</p>
            <p><strong>Artists:</strong> {{ $comic->artists }}</p>
            <p><strong>Writers:</strong> {{ $comic->writers }}</p>
            <p><strong>Price:</strong> {{ $comic->price }}</p>
        </div>
        <div class="row my-3">
            <strong> Description:</strong>
            <p>
                {!! $comic->description !!}
            </p>
        </div>
    @endsection
</div>