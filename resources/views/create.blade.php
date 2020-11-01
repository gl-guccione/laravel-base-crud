@extends('layouts.bookspage')

@section('pageName', 'Aggiungi un libro')

@section('mainContent')

  <main class="main_boxed">

    <form action="{{route('books.store')}}" method="POST">
      @csrf
      @method('POST')

      <div class="book-show">

        <div class="book-show__right">

          <div>
            <h5 class="input-label">ISBN:</h5>
            <input class="input-full" type="text" name="isbn" placeholder="isbn" required>
          </div>

          <div>
            <h5 class="input-label">Titolo:</h5>
            <input class="input-full" type="text" name="title" placeholder="title" required>
          </div>

          <div>
            <h5 class="input-label">URL immagine:</h5>
            <input class="input-full" type="text" name="image" placeholder="image" required>
          </div>

          <div>
            <h5 class="input-label">Autore:</h5>
            <input class="input-full" type="text" name="author" placeholder="author" required>
          </div>

          <div>
            <h5 class="input-label">Genere:</h5>
            <input class="input-full" type="text" name="genre" placeholder="genre" required>
          </div>

          <div>
            <h5 class="input-label">Anno di pubblicazione:</h5>
            <input class="input-full" type="date" name="year" placeholder="year" required>
          </div>

          <div>
            <h5 class="input-label">Numero di pagine:</h5>
            <input class="input-full" type="number" name="pages" placeholder="pages" required>
          </div>

        </div>

      </div>

      <input class="btn ml_20" type="submit" value="Aggiungi nuovo libro">


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
