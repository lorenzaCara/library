<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/books', function() {
    $books = DB::select('
        SELECT books.*, authors.name as author_name, authors.surname as author_surname 
        FROM books 
        LEFT JOIN authors ON books.author_id = authors.id
    ');

    return view('pages.books.index', ['books' => $books]);
});

Route::get('/books/create', function() {
    $authors = DB::select('SELECT * FROM authors');
    return view('pages.books.create', ['authors' => $authors]);
});

Route::post('/books', function(Request $request) {
    $author_names = explode(' ', $request->author_name);
    if (count($author_names) < 2) {
        return redirect()->back()->withErrors(['author_name' => 'Please enter both the first and last name of the author.']);
    }

    $author = DB::table('authors')
    ->where('name', $author_names[0])
    ->where('surname', $author_names[1])
    ->first();

    $author_id = $author ? $author->id : DB::table('authors')->insertGetId(['name' => $author_names[0], 'surname' => $author_names[1]]);

    DB::table('books')->insert([
        'title' => $request->title,
        'author_id' => $author_id,
        'published_year' => $request->year,
        'available' => $request->status == '1'
    ]);

    return redirect('/books')->with('success', 'Libro aggiunto con successo!');
});


Route::get('/books/{id}', function($id) {
    $book = DB::select('
        SELECT books.*, authors.name as author_name, authors.surname as author_surname 
        FROM books 
        LEFT JOIN authors ON books.author_id = authors.id 
        WHERE books.id = ?', 
        [$id]
    );

    return view('pages.books.show', ['book' => $book[0]]);
});

Route::get('/authors', function() {
    $authors = DB::select('SELECT * FROM authors');
    return view('pages.authors', ['authors' => $authors]);
});

Route::get('/loans', function() {
    $loans = DB::select('
        SELECT loans.*, books.title as book_title 
        FROM loans 
        LEFT JOIN books ON loans.book_id = books.id
    ');

    return view('pages.loans', ['loans' => $loans]);
});
