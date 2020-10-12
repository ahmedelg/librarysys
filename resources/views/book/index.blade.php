{{-- @extends('layouts.navbar') --}}

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
      @foreach ($books as $book)
        <tr>
          <th scope="row">{{$book->id}}</th>
          <td>{{$book->book_name}}</td>
          <td>{{$book->book_author}}</td>
          <td>{{$book->book_edition}}</td>
        <td>
          {{-- <form method="POST" action=''>
            @csrf --}}
            <a href="books/borrow/{{$book->id}}"><button type="button" class="btn btn-light">borrow</button></a>
          {{-- </form> --}}
          
        </td>
        <td>
          <form method="POST" action="books/show/{{$book->id}}">
            @csrf
            <button type="submit" class="btn btn-light">More</button>
          </form> 
          
        </td>
        </tr>
      @endforeach
    </tbody>
  </table>

</x-app-layout>

