<form action="{{route('books.store')}}" method="POST">
  @csrf
  @method('POST')

  <input type="text" name="title" placeholder="title">
  <input type="text" name="image" placeholder="image">
  <input type="text" name="isbn" placeholder="isbn">
  <input type="text" name="author" placeholder="author">
  <input type="text" name="genre" placeholder="genre">
  <input type="date" name="year" placeholder="year">
  <input type="number" name="pages" placeholder="pages">

  <input type="submit" value="Invia">

</form>