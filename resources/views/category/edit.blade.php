@extends('layout.main')

<!--kalo cuma 1 baris-->
@section('title', 'Edit Category Data')

<!--kalo lebih dari 1 baris harus ada penutup-->
@section('container')
  <div class="container">
    <div class="row">
      <div class="col-5">
        <h1 class="mt-3">Edit Category Data</h1>
            <form method="post" action="/category/{{ $category->id }}">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="catName">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="catName" placeholder="Category Name" name="name" value="{{$category->name}}">
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <p align="right">
                  <button type="submit" class="btn btn-primary">Edit</button>
                </p>
            </form>
      </div>
    </div>
  </div>
@endsection