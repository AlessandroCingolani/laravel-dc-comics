@extends('layouts.main')


@section('content')
    <h2>Nella fumetteria sono presenti {{ $products }} comics</h2>
    <a href="{{ route('comics.create') }}" class="btn btn-primary">Aggiungi nuovo fumetto</a>
@endsection
