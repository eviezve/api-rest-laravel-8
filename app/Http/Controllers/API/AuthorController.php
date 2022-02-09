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
        $author = Author::all();

        return response()->json([
            'res' => true,
            'data' => $author
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
        /* $author->books()->attach(4); */
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
    public function show($id)
    {
        $author = Author::find($id);

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
    public function update(StoreAuthorRequest $request, $id)
    {
        Author::find($id)->update($request->all());

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
    public function destroy($id)
    {
        Author::find($id)->delete();

        return response()->json([
            'res' => true,
            'msg' => 'Registro elminiado correctamente'
        ]);
    }

    public function authorsWithBooks()
    {
        $data = Author::with('books')->get();

        return response()->json([
            'res' => true,
            'data' => $data
        ]);
    }

    public function showWithBooks($id)
    {
        $author = Author::with('books')->find($id);

        return response()->json([
            'res' => true,
            'data' => $author
        ]);
    }

    public function setBooks($authorId, $bookId)
    {
        $author = Author::find($authorId);

        $author->books()->attach($bookId);

        return response()->json([
            'res' => true,
            'msg' => 'OK'
        ]);
    }
}
