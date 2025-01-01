@extends('template/admin')
@section('title','Halaman Blog')
@section('page_name','Halaman Blog')
@section('data_name','Data Blog')
@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Blog</h3>
        <a href="{{url('/create_blog')}}" class="btn btn-success float-right"><i class="fa-solid fa-plus"></i></a>
    </div>
        <div class="card-body">
                <table class="table table-bordered table-hover" id="example2">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kategori Blog</th>
                            <th>Judul Blog</th>
                            <th>Aksi</th>
                        </tr>
                        <tbody>
                            @foreach ($blog as $item)
                                
                           
                         <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->nama_kategori}}</td>
                            <td>{{$item->judul_blog}}</td>
                            <td>
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{url('delete_blog/'.$item->id_blog)}}" method="POST">
                                    <a href="{{url('edit_blog/'.$item->id_blog)}}" class="btn btn-sm btn-primary">EDIT</a>
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
