@extends('layout.master')
@section('title','index')
@section('content')

<!DOCTYPE html>
<html>
    <head>

    </head>

    <body>
        <?php
            @if ($errors -> any())
    <ul>
        @foreach ($errors -> all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </ul>
@endif
<form action="{{route('create')}}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="Title_book" class="form-label">Title</label>
      <input type="text" class="form-control" name="Title">
    </div>
    <div class="mb-3">
        <label for="Author_book" class="form-label">Author</label>
        <input type="text" class="form-control" name="Author">
      </div>
      <div class="mb-3">
        <label for="Page_book" class="form-label">Page</label>
        <input type="text" class="form-control" name="Page">
      </div>
      <div class="mb-3">
        <label for="Year_book" class="form-label">Year</label>
        <input type="text" class="form-control" name="Year">
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>

        ?>
    </body>
</html>


{{-- @if ($errors -> any())
    <ul>
        @foreach ($errors -> all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </ul>
@endif
<form action="{{route('create')}}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="Title_book" class="form-label">Title</label>
      <input type="text" class="form-control" name="Title">
    </div>
    <div class="mb-3">
        <label for="Author_book" class="form-label">Author</label>
        <input type="text" class="form-control" name="Author">
      </div>
      <div class="mb-3">
        <label for="Page_book" class="form-label">Page</label>
        <input type="text" class="form-control" name="Page">
      </div>
      <div class="mb-3">
        <label for="Year_book" class="form-label">Year</label>
        <input type="text" class="form-control" name="Year">
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form> --}}
@endsection
