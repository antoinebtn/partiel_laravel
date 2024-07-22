@extends('welcome')

@section('content')
    <div class="container">
        <h1>Ajout d'un nouveau livre</h1>
        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            <div>
                <label for="title">Titre</label>
                <input type="text"  id="title" name="title" value="{{ old('title') }}">
            </div>
            <div>
                <label for="author">Author</label>
                <input type="text" id="author" name="author" value="{{ old('author') }}">

            </div>
            <div>
                <label for="year">Year</label>
                <input type="text" id="year" name="year" value="{{ old('year') }}">
            </div>
            <div>
                <label for="genre">Genre</label>
                <input type="text" id="genre" name="genre" value="{{ old('genre') }}">

            </div>
            <button type="submit">Ajouter un livre</button>
        </form>
    </div>
@endsection
