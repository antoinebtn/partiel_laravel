@extends('welcome')

@section('content')
     <h1>Listes des livres :</h1>
     <a href="{{ route("books.create") }}">Ajouter un livre</a>
     <hr>
    @foreach ($books as $book)
        <div class="col-md-4 mx-4 my-4">
            <div>
                <div>
                    <h1 >{{ $book->name }}</h1>
                    <h2>{{ $book->author }}</h2>
                    <h2>Publié l'année: {{ $book->year }}</h2>
                    <a href="{{ route("books.edit", $book->id ) }}">Modifier</a>
                    <form action="{{ route("books.destroy", $book->id ) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
        <hr>
    @endforeach
@endsection
