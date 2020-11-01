<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <body>

    <form action="{{route('books.store')}}" method="POST">
      @csrf
      @method('POST')

      <input type="text" name="title" placeholder="title" required>
      <input type="text" name="image" placeholder="image" required>
      <input type="text" name="isbn" placeholder="isbn" required>
      <input type="text" name="author" placeholder="author" required>
      <input type="text" name="genre" placeholder="genre" required>
      <input type="date" name="year" placeholder="year" required>
      <input type="number" name="pages" placeholder="pages" required>

      <input type="submit" value="Invia">

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


  </body>
</html>
