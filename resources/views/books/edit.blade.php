@extends('welcome')

@section('content')
    <h1>Modification du livre {{ $book->name }}</h1>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title</label>
            <input type="text" id="name" name="name" value="{{ old('name', $book->name) }}">
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" id="author" name="author" value="{{ old('author', $book->author) }}">
        </div>
        <div class="form-group">
            <label for="year">Year</label>
            <input type="text" id="year" name="year" value="{{ old('year', $book->year) }}">
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" id="genre" name="genre" value="{{ old('genre', $book->genre) }}">
        </div>
        <button type="submit">Modifier le livre</button>
    </form>
@endsection
