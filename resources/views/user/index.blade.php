@extends('template.user')
@section('content')
    
    {{-- Jumbortron --}}
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
    {{-- end jumbotron --}}
   
    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
          <h2>HTML</h2>
          <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
          <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
          <h2>PHP</h2>
          <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
          <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
          <h2>JavaScript</h2>
          <p>And lastly this, the third column of representative placeholder content.</p>
          <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
  
  
      <!-- START THE FEATURETTES -->
  
      <hr class="featurette-divider">
  
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Belajar Coding Bersama Programmer Gen - Z</h2>
          <p class="lead">Jangan lewatkan kesempatan untuk berkembang dan mencapai tujuanmu. Bergabunglah sekarang dan mulai perjalanan coding-mu bersama kami!</p>
        </div>
        <div class="col-md-5">
          <img src="{{url('upload/display11.png')}}" alt="Deskripsi Gambar" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">
  
        </div>
      </div>
  
      <hr class="featurette-divider">
  
      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Mengapa Belajar Bersama Kami ? </h2>
          <p class="lead">Materi dirancang untuk pemula, dan terus update.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img src="{{url('upload/5616698.jpg')}}" alt="Deskripsi Gambar" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">
        </div>
      </div>
  
      <hr class="featurette-divider">
  
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Cara Belajar Bersama Programmer Gen - Z</h2>
          <ul>
            <li>Daftar dengan akun gmail anda secara gratis</li>
            <li>Pilih Kelas yang ingin anda ikuti</li>
            <li>Praktik dan berlatih dengan modul yang ada di Programmer Gen - Z</li>
          </ul>
        </div>
        <div class="col-md-5">
          <img src="{{url('upload/genz.jpg')}}" alt="Deskripsi Gambar" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">
  
        </div>
      </div>
  
      <hr class="featurette-divider">
  
      <!-- /END THE FEATURETTES -->
  
    </div><!-- /.container -->




    @endsection