@extends('template/admin')
@section('title','Halaman Tambah Admin')
@section('page_name','Halaman Tambah Katgeori')
@section('data_name','Data Admin')
@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tambah Admin</h3>
    </div>
        <div class="card-body">
           <form method="POST" action="" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama_admin">Nama Admin</label>
                <input type="text" name="nama_admin" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="username">Password</label>
                <input type="text" name="Password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary float-right">Simpan</button>
         </form>
        </div>
    
</div>
@endsection