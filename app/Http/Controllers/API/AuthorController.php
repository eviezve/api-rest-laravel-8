<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAuthorRequest;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Author::all();

        return response()->json([
            'res' => true,
            'data' => $authors
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAuthorRequest $request)
    {
        $author = Author::create($request->all());

        return response()->json([
            'res' => true,
            'msg' => 'Registro correcto.',
            'data' => $author
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        $author->books;

        return response()->json([
            'res' => true,
            'author' => $author,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAuthorRequest $request, Author $author)
    {
        $author->update($request->all());

        return response()->json([
            'res' => true,
            'msg' => 'Registro actualizado correctamente.'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        $author->delete();

        return response()->json([
            'res' => true,
            'msg' => 'Registro elminiado correctamente'
        ]);
    }

    public function attach(Author $author, Book $book)
    {
        $author->books()->attach($book);

        return response()->json([
            'res' => true,
            'msg' => 'OK'
        ]);
    }

    public function search($search)
    {
        return response()->json([
            'res' => true,
            'msg' => 'It works',
            'data' => $search
        ]);
    }
}
