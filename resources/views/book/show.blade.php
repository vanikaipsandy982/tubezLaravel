@extends('layout.main')

<!--kalo cuma 1 baris-->
@section('title', 'Detail Buku')

<!--kalo lebih dari 1 baris harus ada penutup-->
@section('container')
  <div class="container">
    <div class="row">
      <div class="col-8">
        <h1 class="mt-3">Detail Buku</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$book->title}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$book->isbn}}</h6>
                <p class="card-text">
                    Author: {{$book->author}}<br>
                    Publisher : {{$book->publisher}}<br>
                    Description : {{$book->description}}<br>
                    Cover: {{$book->cover}}<br>
                    Category ID : {{$book->category_id}}
                </p>
                <a href="{{ $book->id }}/edit" class="btn btn-warning">Edit</a>
                <form action="/book/{{ $book->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a href="/book"><button type="submit" class="btn btn-dark">Back</button></a>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection