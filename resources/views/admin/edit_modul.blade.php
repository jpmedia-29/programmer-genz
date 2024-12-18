@extends('template/admin')
@section('title','Halaman Edit Modul')
@section('page_name','Halaman Edit Modul')
@section('data_name','Data Kategori')
@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Modul</h3>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ url('update_modul')}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_modul">Nama Modul</label>
                <input type="hidden" name="id" value="{{$modul->id_modul}}">
                <input type="text" name="nama_modul" class="form-control" value="{{ $modul->nama_modul }}" required>
            </div>
            <button type="submit" class="btn btn-primary float-right">Simpan</button>
        </form>
    </div>
</div>

@endsection
