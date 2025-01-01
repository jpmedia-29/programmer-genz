@extends('template/admin')
@section('title','Halaman Tambah Modul')
@section('page_name','Halaman Tambah Modul')
@section('data_name','Data Modul')
@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tambah Modul</h3>
    </div>
        <div class="card-body">
           <form method="POST" action="{{url('save_modul')}}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="nama_modul">Nama Modul</label>
                <input type="text" name="nama_modul" class="form-control" required 
                oninvalid="this.setCustomValidity('Data tidak boleh kosong')" 
                oninput="this.setCustomValidity('')">
            </div>
             
            <div class="form-group">
                <label for="file">Cover Foto</label>
                <input type="file" name="foto" class="form-control" required 
                oninvalid="this.setCustomValidity('Data tidak boleh kosong')" 
                oninput="this.setCustomValidity('')">
            </div>
             
            <button type="submit" class="btn btn-primary float-right">Simpan</button>
         </form>
        </div>
    
</div>
@endsection
