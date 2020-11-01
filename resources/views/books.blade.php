@extends('layouts.bookspage')

@section('pageName', 'Homepage')

@section('mainContent')

  <ul>

    @foreach ($books as $book)


    <li class="book">
      <h2 class="book__title">{{$book->title}}</h2>
      <img class="book__image" src="{{$book->image}}" alt="copertina libro - {{$book->title}}">
      <small class="book__isbn">{{$book->isbn}}</small>
      <a href="{{route('books.show', $book->id)}}">Ulteriori informazioni</a>
    </li>

    @endforeach

  </ul>


@endsection