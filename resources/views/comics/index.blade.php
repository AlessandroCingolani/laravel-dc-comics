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
                    <td>
                        <a href="{{ route('comics.show', $comic) }}" class="btn btn-success"> <i
                                class="fa-solid fa-circle-info"></i></a>
                        <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning"> <i
                                class="fa-solid fa-pencil"></i></a>
                        {{-- <a href="{{ route('comics.show', $comic) }}" class="btn btn-danger"> <i
                                class="fa-regular fa-trash-can"></i></a> --}}
                    </td>

                </tr>
            @endforeach


        </tbody>
    </table>
    {{ $products->links() }}
@endsection
