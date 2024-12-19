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
    <div class="row">
        <div class="col-md-8">
        @foreach ($blog as $item)
            
     
        <div class="col-md-4">
        <div class="card mt-4 mb-4" style="width: 18rem; float: left; margin: 4px;">
            <img src="{{ asset('storage/'.$item->foto)}}" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">{{$item->judul_blog}}</h5>

                <a href="#" class="btn btn-danger">Selengkapnya</a>
            </div>
        </div>
        </div>

        @endforeach
        </div>
        <div class="col-md-4">
            <label for="">Kategori</label>
            @foreach ($kategori as $item)
                <ul>
                    <li><a href="">{{$item->nama_kategori}}</a></li>
                </ul>
            @endforeach
        </div>
    
        

    </div>
    </div>
</div>

@endsection