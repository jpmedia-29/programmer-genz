@extends('template/admin')
@section('title','Halaman Tambah Modul')
@section('page_name','Halaman Tambah Modul')
@section('data_name','Data Kategori')
@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tambah Modul</h3>
    </div>
        <div class="card-body">
           <form method="POST" action="" enctype="multipart/form-data">
            @csrf
           
            
            <div class="form-group">
                <label for="nama_kategori">Nama Modul</label>
                <input type="text" name="nama_kategori" class="form-control" required>
            </div>
     
          
         
            <button type="submit" class="btn btn-primary float-right">Simpan</button>
         </form>
        </div>
    
</div>
@endsection
