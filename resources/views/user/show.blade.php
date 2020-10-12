<x-app-layout>
  <x-slot name="header">
  </x-slot>
  <table class="tbl-books tbl-show table table-striped table-dark">
    <thead>
    </thead>
    <tbody>
      <tr>
        <th scope="row">Id</th>
        <td>{{$user->id}}</td>
      </tr>
      <tr>
        <th scope="row">Name</th>
        <td>{{$user->name}}</td>
      </tr>
      <tr>
        <th scope="row">Email</th>
        <td>{{$user->email}}</td>
      </tr>
      <tr>
        <th>
          <a href="/dashboard"><button type="button" class="btn btn-light">Ok</button></a>
        </th>
      </tr>
    </tbody>
  </table>

</x-app-layout>