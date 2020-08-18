@extends('layout.main')

<!--kalo cuma 1 baris-->
@section('title', 'Edit Book Data')

<!--kalo lebih dari 1 baris harus ada penutup-->
@section('container')
  <div class="container">
    <div class="row">
      <div class="col-8">
        <h1 class="mt-3">Edit Book Data</h1>
            <form method="post" action="/book/{{ $book->id }}">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="isbn">ISBN</label>
                    <input type="text" class="form-control @error('isbn') is-invalid @enderror" id="isbn" placeholder="ISBN" name="isbn" maxlength="13" value="{{ $book->isbn }}">
                    @error('isbn')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <label for="title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Title" name="title" value="{{ $book->title }}">
                    @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <label for="author">Author</label>
                    <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" placeholder="Author" name="author" value="{{ $book->author }}">
                    @error('author')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <label for="publisher">Publisher</label>
                    <input type="text" class="form-control @error('publisher') is-invalid @enderror" id="publisher" placeholder="Publisher" name="publisher" value="{{ $book->publisher }}">
                    @error('publisher')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" placeholder="Description" name="description" value="{{ $book->description }}">
                    <label for="cover">Cover</label>
                    <input type="file" class="form-control id="cover" name="cover" value="{{ $book->cover }}">
                    <label for="category_id">Category ID</label>
                    <input type="text" class="form-control @error('category_id') is-invalid @enderror" id="category_id" placeholder="Category ID" name="category_id" value="{{ $book->category_id }}">
                    @error('category_id')
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