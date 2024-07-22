<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();

        return view('books.index', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'author' => 'required|max:255',
            'year' => 'required',
            'genre' => 'max:255'
        ]);

        Book::create($validatedData);

        return redirect('/books')->with('success', 'Book created!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $book = Book::find($id);
        return view('books.edit', ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required',
            'author' => 'required',
            'year' => 'required|numeric',
        ]);

        $book = Book::find($id);
        $book->name = $request->name;
        $book->author = $request->author;
        $book->year = $request->year;
        $book->genre = $request->genre;
        $book->save();

        return redirect('/books');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $book = Book::find($id);

        $book->delete();

        return redirect('/books')->with('success', 'Book deleted!');
    }
}
