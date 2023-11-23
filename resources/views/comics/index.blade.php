@extends('layouts.main')

@section('content')
    <h1>Lista fumetti</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome Fumetto</th>
                <th scope="col">Series</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $comic)
                <tr>
                    <td>{{ $comic->id }}</td>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->price }}</td>
                    <td> <a href="{{ route('comics.show', $comic) }}" class="btn btn-success"> Dettagli</a> </td>

                </tr>
            @endforeach


        </tbody>
    </table>
@endsection
