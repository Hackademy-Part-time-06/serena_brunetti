<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriesRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('Categories.index', ['categorie' => $categories]);
    }


    public function create()
    {
        return view('Categories.create');
    }


    public function store(CategoriesRequest $request)
    {
        /*        $path_image = '';
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file_name = $request->file('image')->getClientOriginalName();
            $path_image = $request->file('image')->storeAs('public/images', $file_name);
        } */

        Category::create([
            'name' => $request->name,
        ]);


        return redirect()->route('categories.index');

        /* ->with(['success' => 'Libro inseritoooo']); */
    }

    public function show($book)
    {

        $mybook = Category::find($book);
        if (is_null($mybook)) {
            abort(404);
        }


        return view('Categories.show', ['mybook' => $mybook]);
    }
}
