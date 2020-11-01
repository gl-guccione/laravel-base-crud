<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Illuminate\Validation\Rule;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('books', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
          'title'=>'required|max:20',
          'image'=>'required|max:20',
          'isbn'=>'required|unique:books|max:13',
          'author'=>'required|max:20',
          'genre'=>'required|max:20',
          'year'=>'required|date',
          'pages'=>'required|integer',
        ]);

        $book = new Book;

        // $book->title = $data["title"];
        // $book->image = $data["image"];
        // $book->isbn = $data["isbn"];
        // $book->author = $data["author"];
        // $book->genre = $data["genre"];
        // $book->year = $data["year"];
        // $book->pages = $data["pages"];

        $book->fill($data);

        $book->save();

        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      $book = Book::find($id);

      return view('edit', ['book'=>$book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $request->validate([
          'title'=>'required|max:20',
          'image'=>'required|max:20',
          'isbn'=>[
            'required',
            'max:13',
            Rule::unique('books')->ignore($id),
          ],
          'author'=>'required|max:20',
          'genre'=>'required|max:20',
          'year'=>'required|date',
          'pages'=>'required|integer',
        ]);

        $book = Book::find($id);

        // $book->title = $data["title"];
        // $book->image = $data["image"];
        // $book->isbn = $data["isbn"];
        // $book->author = $data["author"];
        // $book->genre = $data["genre"];
        // $book->year = $data["year"];
        // $book->pages = $data["pages"];

        $book->fill($data);

        $book->update($data);

        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
