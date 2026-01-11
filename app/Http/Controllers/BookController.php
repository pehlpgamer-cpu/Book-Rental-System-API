<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $response = Book::paginate($perPage = 3, $columns = ['id', 'title', 'genre', 'author'], $pageName = 'books');
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
    public function store(StoreBookRequest $request)
    {
        $validate = $request->validated();

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

    public function softDelete(int $id)
    {

    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
