<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books</title>
  </head>
  <body>

    <a href="{{route('books.create')}}">Aggiungi un nuovo libro</a>

    @foreach ($books as $book)
      <div class="book">
        <h2 class="book__title">{{$book->title}}</h2>
        <img class="book__image" src="{{$book->image}}" alt="copertina libro - {{$book->title}}">
        <small class="book__isbn">{{$book->isbn}}</small>
        <a href="{{route('books.show', $book->id)}}">Ulteriori informazioni</a>
      </div>
    @endforeach

  </body>
</html>