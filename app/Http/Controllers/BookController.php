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
        $response = Book::all('id', 'title', 'genre', 'author');
        return $response;
    }

    public function find($id)
    {
        $response = Book::find($id);
        return $response;
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => ['required', 'string', 'unique:books', 'max:255'],
            'genre' => ['required','string'],
            'author' => ['required', 'string'],
        ]);

        Book::create($validate);

        return response()->json()->setStatusCode(201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
