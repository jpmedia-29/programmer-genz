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
        <form method="POST" action="{{url('save_profil')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama_profil">Nama Profil</label>
                <input type="text" name="nama_profil" value="{{ old('nama_profil', $profil->nama_profil ?? '') }}" class="form-control"  required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="this.setCustomValidity('')">
            </div> 

            <div class="form-group">
                <label for="logo">Logo</label>
             
                @if($profil && $profil->logo)
                    <img src="{{ asset('storage/uploads/profil/' . basename($profil->logo)) }}" alt="Logo" width="100">
                @endif
            
                <input type="file" name="logo" class="form-control">
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" class="form-control" cols="30" rows="10" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="this.setCustomValidity('')">{{ old('alamat', $profil->alamat ?? '') }}</textarea>
            </div>

            <div class="form-group">
                <label for="no_telp">No Telp</label>
                <input type="number" name="no_telp" value="{{ old('no_telp', $profil->no_telp ?? '') }}" class="form-control"  required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="this.setCustomValidity('')">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" value="{{ old('email', $profil->email ?? '') }}" class="form-control" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="this.setCustomValidity('')">
            </div> 

            <button type="submit" class="btn btn-primary float-right">Simpan</button>
        </form>
    </div>
</div>

@endsection
