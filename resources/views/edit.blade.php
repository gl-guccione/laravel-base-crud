@extends('layouts.bookspage')

@section('pageName', 'Modifica un libro')

@section('mainContent')

  <main class="main_boxed">

    <form action="{{route('books.update', $book->id)}}" method="POST">
      @csrf
      @method('PUT')

      <div class="book-show">

        <div class="book-show__left">
          <img class="book-show__image" src="{{$book->image}}" alt="immagine mancante">
          <div>
            <h5 class="input-label">URL immagine:</h5>
            <input class="input-full" type="text" name="image" placeholder="image" value="{{$book->image}}" required>
          </div>
        </div>

        <div class="book-show__right">

          <div>
            <h5 class="input-label">Titolo:</h5>
            <input class="input-full" type="text" name="title" placeholder="title" value="{{$book->title}}" required>
          </div>
          <div>
            <h5 class="input-label">ISBN:</h5>
            <input class="input-full" type="text" name="isbn" placeholder="isbn" value="{{$book->isbn}}" required>
          </div>
          <div>
            <h5 class="input-label">Autore:</h5>
            <input class="input-full" type="text" name="author" placeholder="author" value="{{$book->author}}" required>
          </div>
          <div>
            <h5 class="input-label">Genere:</h5>
            <input class="input-full" type="text" name="genre" placeholder="genre" value="{{$book->genre}}" required>
          </div>
          <div>
            <h5 class="input-label">Anno di pubblicazione:</h5>
            <input class="input-full" type="date" name="year" placeholder="year" value="{{$book->year}}" required>
          </div>
          <div>
            <h5 class="input-label">Numero di pagine:</h5>
            <input class="input-full" type="number" name="pages" placeholder="pages" value="{{$book->pages}}" required>
          </div>

        </div>

      </div>


      <input class="btn" type="submit" value="Aggiorna i dati">

    </form>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

  </main>


@endsection
