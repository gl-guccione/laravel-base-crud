@extends('layouts.bookspage')

@section('pageName', 'Dettagli libro')

@section('mainContent')

  <main class="main_boxed">

    <div class="book-show">

      <div class="book-show__left">

        <img class="book-show__image" src="{{$book->image}}" alt="copertina libro - {{$book->title}}">
        <h3 class="book-show__isbn">
          <i class="fas fa-barcode"></i>
          {{$book->isbn}}
        </h3>

        <div class="book-show__actions">

          <a class="btn" href="{{route('books.edit', $book->id)}}">
            <i class="far fa-edit"></i>
            Modifica
          </a>

          <form action="{{route('books.destroy', $book->id)}}" method="POST">

            @csrf
            @method('DELETE')

            <input id="delete" type="submit">
            <label for="delete" class="btn">
              <i class="far fa-trash-alt"></i>
              Delete
            </label>

          </form>

        </div>


      </div>

      <div class="book-show__right">

        <h2 class="book-show__title">Titolo: {{$book->title}}</h2>
        <h3 class="book-show__author">Autore: {{$book->author}}</h3>
        <h3 class="book-show__genre">Genere: {{$book->genre}}</h3>

        <h5 class="book-show__year">Anno di Pubblicazione: {{$book->year}}</h5>
        <small class="book-show__pages">Numero di pagine: {{$book->pages}}</small>

      </div>

    </div>



  </main>

@endsection
