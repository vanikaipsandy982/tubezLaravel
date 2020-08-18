@extends('layout.main')

<!--kalo cuma 1 baris-->
@section('title', 'Detail Category')

<!--kalo lebih dari 1 baris harus ada penutup-->
@section('container')
  <div class="container">
    <div class="row">
      <div class="col-4">
        <h1 class="mt-3">Detail Category</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><b>ID : {{$category->id}}</b></h5>
                <p class="card-text">
                  Name : {{ $category->name }}
                </p>
                <a href="{{ $category->id }}/edit" class="btn btn-warning">Edit</a>
                <form action="/category/{{ $category->id }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a href="/category"><button type="submit" class="btn btn-dark">Back</button></a>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection