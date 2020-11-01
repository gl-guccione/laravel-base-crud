@extends('layouts.bookspage')

@section('pageName', 'Homepage')

@section('mainContent')

  <main class="main_boxed">

    <ul class="books__collection">

      @foreach ($books as $book)

        <li class="book">

          <a href="{{route('books.show', $book->id)}}">
            <img class="book__image" src="{{$book->image}}" alt="copertina libro - {{$book->title}}">
          </a>

          <h2 class="book__title">{{$book->title}}, {{$book->author}}</h2>

          <h3 class="book__genre">{{$book->genre}}</h3>

          <h4 class="book__isbn">
            <i class="fas fa-barcode"></i>
            {{$book->isbn}}
          </h4>

        </li>

      @endforeach

      <li class="book">

        <a href="{{route('books.create')}}">
          <div class="book__image">
            <i class="fas fa-plus-square"></i>
          </div>
        </a>

        <h2 class="book__add">Aggiungi un libro</h2>

      </li>

    </ul>

  </main>



@endsection