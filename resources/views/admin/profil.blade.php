@extends('template/admin')
@section('title','Halaman Profil')
@section('page_name','Halaman Profil')
@section('data_name','Data Profil')
@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Profil</h3>
    </div>
        <div class="card-body">
           <form method="POST" action="" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama_instansi">Nama Instansi</label>
                <input type="text" name="nama_instansi" value="" class="form-control" required>
            </div> 
            <div class="form-group">
                <label for="logo">Logo</label>
                <input type="file" name="logo" class="form-control" >
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" class="form-control" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="no_telp">No Telp</label>
                <input type="number" name="no_telp" class="form-control" value="" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" value="" class="form-control" required>
            </div> 
            <button type="submit" class="btn btn-primary float-right">Simpan</button>
         </form>
        </div>
</div>
@endsection
