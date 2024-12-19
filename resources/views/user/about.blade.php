@extends('template.user')
@Section('content')
<div class="jumbotron" id="jumbotron" style="background-image: url('/upload/bac.jpg');   background-size: cover; 
background-position: center;
background-repeat: no-repeat;">
  <h1 class="display-4"><b>Programmer Gen - Z</b></h1>
  <p class="lead">Dari Pemula ke Profesional, Koding Dimulai di Sini</p>
  <hr class="my-4">
  <p>Koding itu Seru, Mulai Petualanganmu!</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Daftar</a>
  </p>
</div>
<div class="container">
 <div class="card">
    @foreach ($about as $item)
        
    <div class="card-body">
        {!! $item->deskripsi !!}

    </div>
    @endforeach
 </div>
</div>

@endsection