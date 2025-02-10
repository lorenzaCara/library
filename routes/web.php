<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
    $authors = DB::select('SELECT * from authors');
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
