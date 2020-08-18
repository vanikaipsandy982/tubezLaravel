@extends('layout.main')

<!--kalo cuma 1 baris-->
@section('title', 'Daftar Buku')

<!--kalo lebih dari 1 baris harus ada penutup-->
@section('container')
  <div class="container">
    <div class="row">
      <div class="col-8">
        <h1 class="mt-3">Daftar Buku</h1>
        <a href="/book/create" class="btn btn-primary my-2">Add Book Data</a>
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <ul class="list-group">
        @foreach ($books as $book)
          <li class="list-group-item d-flex justify-content-between align-items-center">
            {{$book->title}}
            <a href="/book/{{$book->id}}" class="btn btn-info">Detail</a>
          </li>
        @endforeach
        </ul>
      </div>
    </div>
  </div>
@endsection