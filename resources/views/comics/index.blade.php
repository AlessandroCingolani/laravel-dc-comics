@extends('layouts.main')

@section('content')
    <h1>Lista fumetti</h1>
    @if (session('deleted'))
        <div class="alert alert-success" role="alert">
            {{ session('deleted') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome Fumetto</th>
                <th scope="col">Series</th>
                <th scope="col">Prezzo</th>
                <th class="text-center" scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $comic)
                <tr>
                    <td>{{ $comic->id }}</td>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->price }}</td>
                    <td class="text-center">
                        <a href="{{ route('comics.show', $comic) }}" class="btn btn-success"> <i
                                class="fa-solid fa-circle-info"></i></a>
                        <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning"> <i
                                class="fa-solid fa-pencil"></i></a>
                        @include('partials.formDelete')
                    </td>

                </tr>
            @endforeach


        </tbody>
    </table>
    {{ $products->links() }}
@endsection
