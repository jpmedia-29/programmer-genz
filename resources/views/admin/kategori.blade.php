@extends('template/admin')
@section('title','Halaman Kategori')
@section('page_name','Halaman Kategori')
@section('data_name','Data Kategori')
@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Kategori</h3>
        <a href="{{url('/create_kategori')}}" class="btn btn-success float-right"><i class="fa-solid fa-plus"></i></a>
    </div>
        <div class="card-body">
                <table class="table table-bordered table-hover" id="example2">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Kategori</th>
                            <th>Aksi</th>
                        </tr>
                        <tbody>
                            @foreach ($kategori as $item)
                                
                          
                         <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->nama_kategori}}</td>
                            <td>
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{url('delete_kategori/'.$item->id_kategori)}}" method="POST">
                                    <a href="" class="btn btn-sm btn-primary">EDIT</a>
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
