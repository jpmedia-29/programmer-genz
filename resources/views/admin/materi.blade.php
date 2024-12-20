@extends('template/admin')
@section('title','Halaman Materi')
@section('page_name','Halaman Materi')
@section('data_name','Data Materi')
@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Materi</h3>
        <a href="{{url('/create_materi')}}" class="btn btn-success float-right"><i class="fa-solid fa-plus"></i></a>
    </div>
        <div class="card-body">
                <table class="table table-bordered table-hover" id="example2">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Modul</th>
                            <th>Judul Materi</th>
                            <th>Aksi</th>
                        </tr>
                        <tbody>
                            @foreach ($materi as $item)
                                
                           
                         <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->nama_modul}}</td>
                            <td>{{$item->judul_materi}}</td>
                            <td>
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{url('delete_materi/'.$item->id_materi)}}" method="POST">
                                    <a href="{{url('edit_materi/'.$item->id_materi)}}" class="btn btn-sm btn-primary">EDIT</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                </form>
                            </td>
                         </tr>
                         @endforeach
                        </tbody>
                    </thead>
                </table>
            {{-- </div> --}}
        </div>
    
</div>
@endsection
