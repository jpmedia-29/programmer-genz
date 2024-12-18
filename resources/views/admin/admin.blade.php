@extends('template/admin')
@section('title','Halaman Admin')
@section('page_name','Halaman Admin')
@section('data_name','Data Admin')
@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Admin</h3>
        <a href="{{url('/create_admin')}}" class="btn btn-success float-right"><i class="fa-solid fa-plus"></i></a>
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
                        <tbody>
                         <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="" method="POST">
                                    <a href="" class="btn btn-sm btn-primary">EDIT</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                </form>
                            </td>
                         </tr>
                        </tbody>
                    </thead>
                </table>
            {{-- </div> --}}
        </div>
    
</div>
@endsection