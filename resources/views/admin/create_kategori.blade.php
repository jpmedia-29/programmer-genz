@extends('template/admin')
@section('title','Halaman Tambah Kategori')
@section('page_name','Halaman Tambah Katgeori')
@section('data_name','Data Kategori')
@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tambah Kategori</h3>
    </div>
        <div class="card-body">
           <form method="POST" action="{{url('save_kategori')}}" enctype="multipart/form-data">
            @csrf
           
            <div class="form-group">
                <label for="nama_kategori">Nama Kategori</label>
                <input type="text" name="nama_kategori" class="form-control" required>
            </div>
     
    
            <button type="submit" class="btn btn-primary float-right">Simpan</button>
         </form>
        </div>
    
</div>
@endsection
