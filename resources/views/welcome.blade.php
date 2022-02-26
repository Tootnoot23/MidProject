@extends('layout.master')
@section('title','index')
@section('content')
<div class="p-3 mb-2 bg-primary text-white text-center">Tambahkan Buku yang Akan Dimasukkan</div>
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
      <input type="text" class="shadow-lg p-3 mb-5 bg-body rounded form-control" name="Title">
    </div>
    <div class="mb-3">
        <label for="Author_book" class="form-label">Author</label>
        <input type="text" class="shadow-lg p-3 mb-5 bg-body rounded form-control" name="Author">
      </div>
      <div class="mb-3">
        <label for="Page_book" class="form-label">Page</label>
        <input type="text" class="shadow-lg p-3 mb-5 bg-body rounded form-control" name="Page">
      </div>
      <div class="mb-3">
        <label for="Year_book" class="form-label">Year</label>
        <input type="text" class="shadow-lg p-3 mb-5 bg-body rounded form-control" name="Year">
      </div>
      <br>
    <button type="submit" class="btn btn-success">Submit</button>
    <br>
    <div class ="img-container text-center">
        <img src="images/best-quotes-about-libraries-and-librarians-when-in-doubt-go-to-the-library-j.k.-rowling-540x763.jpg"
            width: 20px; height: 20px; >
    </div>

</form>
@endsection
