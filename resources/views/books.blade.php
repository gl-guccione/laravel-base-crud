<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books</title>
  </head>
  <body>

    @foreach ($books as $book)
      <div class="book">
        <h2 class="book__title">{{$book->title}}</h2>
        <img class="book__image" src="{{$book->image}}" alt="{{$book->title}}">
        <small class="book__isbn">{{$book->isbn}}</small>
        <h3 class="book__author">{{$book->author}}</h3>
        <h3 class="book__genre">{{$book->genre}}</h3>
        <h5 class="book__year">{{$book->year}}</h5>
        <small class="book__pages">{{$book->pages}}</small>
      </div>
    @endforeach


  </body>
</html>