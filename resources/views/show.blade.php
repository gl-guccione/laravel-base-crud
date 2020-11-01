@extends('layouts.bookspage')

@section('pageName', 'Dettagli libro')

@section('mainContent')

  <div class="book">
    <h2 class="book__title">{{$book->title}}</h2>
    <img class="book__image" src="{{$book->image}}" alt="copertina libro - {{$book->title}}">
    <small class="book__isbn">{{$book->isbn}}</small>
    <h3 class="book__author">{{$book->author}}</h3>
    <h3 class="book__genre">{{$book->genre}}</h3>
    <h5 class="book__year">{{$book->year}}</h5>
    <small class="book__pages">{{$book->pages}}</small>
  </div>

  <a href="{{route('books.edit', $book->id)}}">Modifica</a>

  <form action="{{route('books.destroy', $book->id)}}" method="POST">

    @csrf
    @method('DELETE')

    <input type="submit" value="Elimina">

  </form>

@endsection
