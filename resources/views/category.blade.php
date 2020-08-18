@extends('layout.main')

<!--kalo cuma 1 baris-->
@section('title', 'Category Page')

<!--kalo lebih dari 1 baris harus ada penutup-->
@section('container')
  <div class="container">
    <div class="row">
      <div class="col-10">
      <!-- <?php echo $name; ?> -->
      <!--karena pake template jadi bisa-->
        <h1 class="mt-3">Hello, {{$name}} !</h1>
      </div>
    </div>
  </div>
@endsection