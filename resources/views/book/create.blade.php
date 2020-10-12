{{-- @extends('layouts.navbar') --}}

<x-app-layout>
  <x-slot name="header">
  </x-slot>
  <form class='frm-borrow-book' method="POST" action="books/">
    @csrf
    @method('put')
    <div class="form-group row">
      <label for="example-date-input" style="color:white; font-weight:bold;" class="col-2 col-form-label">Date</label>
      <div class="col-10">
        <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
      </div>
    </div>
    <div class="form-group row">
      <label for="example-time-input" style="color:white; font-weight:bold;" class="col-2 col-form-label">Time</label>
      <div class="col-10">
        <input class="form-control" type="time" value="13:45:00" id="example-time-input">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-10">
      <button type="submit" class="btn btn-dark">Done</button>
      <a href="{{route('books')}}"><button type="button" class="btn btn-secondary">Cancel</button></a>
      </div>
    </div>
  </form>
</x-app-layout>

