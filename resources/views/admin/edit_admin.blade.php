@extends('template/admin')
@section('title','Halaman Edit Admin')
@section('page_name','Halaman Edit Admin')
@section('data_name','Data Admin')
@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Admin</h3>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ url('update_admin/' . $user->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_lengkap">Nama Admin</label>
                <input type="text" name="nama_lengkap" class="form-control" 
                    value="{{ old('nama_lengkap', $user->nama_lengkap) }}" required 
                    oninvalid="this.setCustomValidity('Data tidak boleh kosong')" 
                    oninput="this.setCustomValidity('')">

                @if ($errors->has('nama_lengkap'))
                    <small class="text-danger">{{ $errors->first('nama_lengkap') }}</small>
                @endif
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" 
                    value="{{ old('username', $user->username) }}" required 
                    oninvalid="this.setCustomValidity('Data tidak boleh kosong')" 
                    oninput="this.setCustomValidity('')">

                @if ($errors->has('username'))
                    <small class="text-danger">{{ $errors->first('username') }}</small>
                @endif
            </div>

            <div class="form-group">
                <label for="Password">Password (Opsional)</label>
                <input type="password" name="Password" class="form-control" 
                    placeholder="Kosongkan jika tidak ingin mengganti password" 
                    oninput="this.setCustomValidity('')">

                @if ($errors->has('Password'))
                    <small class="text-danger">{{ $errors->first('Password') }}</small>
                @endif
            </div>

            <button type="submit" class="btn btn-primary float-right">Simpan</button>
        </form>
    </div>
</div>

@endsection
