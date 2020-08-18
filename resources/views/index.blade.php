@extends('layout/main')

<!--kalo cuma 1 baris-->
@section('title', 'Home Page')

<!--kalo lebih dari 1 baris harus ada penutup-->
@section('container')
  <div class="container">
    <div class="row">
      <div class="col-10">
        <h1 class="mt-3">Hello, world!</h1>
      </div>
    </div>
  </div>
@endsection