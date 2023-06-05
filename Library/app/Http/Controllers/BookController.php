<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    public function index()
    {
        $books = Book::all();
        return view('Books.index', ['books' => $books]);
    }

    public function create()
    {
        return view('Books.create');
    }

    public function store(BookRequest $request)
    {
        /*         $request->validate([
            "title" => "required|string",
            "pages" => "required",
            "author" => "required|string",
            "year" => "required"
        ]); */

        $path_image = '';
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file_name = $request->file('image')->getClientOriginalName();
            $path_image = $request->file('image')->storeAs('public/images', $file_name);
        }

        Book::create([
            'title' => $request->title,
            'pages' => $request->pages,
            'author' => $request->author,
            'year' => $request->year,
            'image' => $path_image,
        ]);


        return redirect()->route('books.index')->with(['success' => 'Libro inseritoooo']);
    }

    public function show($book)
    {

        $mybook = Book::find($book);
        if (is_null($mybook)) {
            abort(404);
        }


        return view('Books.show', ['mybook' => $mybook]);
    }
}
