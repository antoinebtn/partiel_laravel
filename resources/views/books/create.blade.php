@extends('welcome')

@section('content')
    <div class="container">
        <h1>Ajout d'un nouveau livre</h1>
        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            @method('POST')
            <div>
                <label for="name">Titre</label>
                <input type="text"  id="name" name="name">
            </div>
            <div>
                <label for="author">Author</label>
                <input type="text" id="author" name="author">

            </div>
            <div>
                <label for="year">Year</label>
                <input type="text" id="year" name="year">
            </div>
            <div>
                <label for="genre">Genre</label>
                <input type="text" id="genre" name="genre">

            </div>
            <button type="submit">Ajouter un livre</button>
        </form>
    </div>
@endsection
