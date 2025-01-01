@extends('template/admin')
@section('title','Halaman Modul')
@section('page_name','Halaman Modul')
@section('data_name','Data Modul')
@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Modul</h3>
        <a href="{{url('/create_modul')}}" class="btn btn-success float-right"><i class="fa-solid fa-plus"></i> Tambah Modul</a>
    </div>
    <div class="card-body">
       
        <table class="table table-bordered table-hover" id="example2">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Modul</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($modul as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_modul }}</td>
                        <td>
                            @if($item->foto)
                                <img src="{{ asset('storage/' . $item->foto) }}" alt="Foto Modul" style="max-width: 100px;">
                            @else
                                <span class="text-muted">Tidak ada foto</span>
                            @endif
                        </td>
                        <td>
                            <!-- Tombol Edit -->
                            <a href="{{ url('edit_modul/' . $item->id_modul) }}" class="btn btn-sm btn-primary">EDIT</a>

                            <!-- Tombol Hapus -->
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ url('delete_modul/' . $item->id_modul) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('delete')
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
