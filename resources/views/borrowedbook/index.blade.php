<x-app-layout>
  <x-slot name="header">
  </x-slot>
  <table class="tbl-books table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Author</th>
        <th scope="col">Edition</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($borrows as $book)
        <tr>
          <th scope="row">{{$book->book_id}}</th>
          <td>{{$book->book_name}}</td>
          <td>{{$book->book_author}}</td>
          <td>{{$book->book_edition}}</td>
          <td><a href="books/borrow/{{$book->book_id}}"><button type="button" class="btn btn-light">borrow</button></a></td>
          <td><a href="books/show/{{$book->book_id}}"><button type="button" class="btn btn-light">details</button></a></td>
        </tr>
      @endforeach
    </tbody>
  </table>

</x-app-layout>

