@extends('layout.main')

<!--kalo cuma 1 baris-->
@section('title', 'Daftar Category')

<!--kalo lebih dari 1 baris harus ada penutup-->
@section('container')
  <div class="container">
    <div class="row">
      <div class="col-4">
        <h1 class="mt-3">Daftar Category</h1>
        <a href="/category/create" class="btn btn-success my-2">Add Category Data</a>
        @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
        @endif
        <ul class="list-group">
        @foreach ($categories as $category)
          <li class="list-group-item d-flex justify-content-between align-items-center">
            {{$category->name}}
            <a href="/category/{{$category->id}}" class="btn btn-info">Detail</a>
          </li>
        @endforeach
      </ul>
      </div>
    </div>
  </div>
@endsection