@extends('layouts.bookspage')

@section('pageName', 'Modifica un libro')

@section('mainContent')

  <form action="{{route('books.update', $book->id)}}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="title" placeholder="title" value="{{$book->title}}" required>
    <input type="text" name="image" placeholder="image" value="{{$book->image}}" required>
    <input type="text" name="isbn" placeholder="isbn" value="{{$book->isbn}}" required>
    <input type="text" name="author" placeholder="author" value="{{$book->author}}" required>
    <input type="text" name="genre" placeholder="genre" value="{{$book->genre}}" required>
    <input type="date" name="year" placeholder="year" value="{{$book->year}}" required>
    <input type="number" name="pages" placeholder="pages" value="{{$book->pages}}" required>

    <input type="submit" value="Aggiorna i dati">

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

@endsection
