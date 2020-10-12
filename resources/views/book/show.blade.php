<x-app-layout>
  <x-slot name="header">
  </x-slot>
  <table class="tbl-books tbl-show table table-striped table-dark">
    <thead>
    </thead>
    <tbody>
      <tr>
        <th scope="row">Id</th>
        <td>{{$book->id}}</td>
      </tr>
      <tr>
        <th scope="row">Name</th>
        <td>{{$book->book_name}}</td>
      </tr>
      <tr>
        <th scope="row">Author</th>
        <td>{{$book->book_author}}</td>
      </tr>
      <tr>
        <th scope="row">Ediition</th>
        <td>{{$book->book_edition}}</td>
      </tr>
      
      <tr>
        <th>
          <a href="/books"><button type="button" class="btn btn-light">Back</button></a>
        </th>
        <td style="background-color:transparent;">
        
        </td>
      </tr>
    </tbody>
  </table>

</x-app-layout>