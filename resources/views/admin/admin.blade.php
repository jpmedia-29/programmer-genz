@extends('template/admin')
@section('title','Halaman Admin')
@section('page_name','Halaman Admin')
@section('data_name','Data Admin')
@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Admin</h3>
        <a href="{{ url('/create_admin') }}" class="btn btn-success float-right"><i class="fa-solid fa-plus"></i> Tambah Admin</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover" id="example2">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Admin</th>
                    <th>Username</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($user as $key => $user)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $user->nama_lengkap }}</td>
                        <td>{{ $user->username }}</td>
                        <td>
                            <!-- Tombol Edit -->
                            <a href="{{ url('edit_admin/' . $user->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                            
                            <!-- Tombol Hapus -->
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ url('delete_admin/' . $user->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
