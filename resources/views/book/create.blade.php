@extends('layout.main')

<!--kalo cuma 1 baris-->
@section('title', 'Add Book Data')

<!--kalo lebih dari 1 baris harus ada penutup-->
@section('container')
  <div class="container">
    <div class="row">
      <div class="col-8">
        <h1 class="mt-3">Add Book Data</h1>
            <form method="post" action="/book">
                @csrf
                <div class="form-group">
                    <label for="isbn">ISBN</label>
                    <input type="text" class="form-control @error('isbn') is-invalid @enderror" id="isbn" placeholder="ISBN" name="isbn" maxlength="13" value="{{ old('isbn')}}">
                    @error('isbn')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <label for="title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Title" name="title" value="{{ old('title')}}">
                    @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <label for="author">Author</label>
                    <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" placeholder="Author" name="author" value="{{ old('author')}}">
                    @error('author')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <label for="publisher">Publisher</label>
                    <input type="text" class="form-control @error('publisher') is-invalid @enderror" id="publisher" placeholder="Publisher" name="publisher" value="{{ old('publisher')}}">
                    @error('publisher')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" placeholder="Description" name="description" value="{{ old('description')}}">
                    <label for="cover">Cover</label>
                    <input type="file" class="form-control id="cover" name="cover" value="{{ old('cover')}}">
                    <label for="category_id">Category ID</label>
                    <input type="text" class="form-control @error('category_id') is-invalid @enderror" id="category_id" placeholder="Category ID" name="category_id" value="{{ old('category_id')}}">
                    @error('category_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <p align="right">
                  <button type="reset" class="btn btn-secondary">Reset</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </p>
            </form>
      </div>
    </div>
  </div>
@endsection