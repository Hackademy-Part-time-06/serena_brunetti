<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('index', ['books' => $books]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            "title" => "required|string",
            "pages" => "required",
            "author" => "required|string",
            "year" => "required"
        ]);

        Book::create([
            'title' => $request->title,
            'pages' => $request->pages,
            'author' => $request->author,
            'year' => $request->year,
        ]);


        return redirect()->route('books.index')->with(['success' => 'Libro inseritoooo']);
    }

    public function show($book)
    {

        $mybook = Book::find($book);
        if (is_null($mybook)) {
            abort(404);
        }


        return view('show', ['mybook' => $mybook]);
    }
}
