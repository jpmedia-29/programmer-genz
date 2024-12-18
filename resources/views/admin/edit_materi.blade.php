@extends('template/admin')
@section('title','Halaman Edit Materi')
@section('page_name','Halaman Edit Katgeori')
@section('data_name','Data Materi')
@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Materi</h3>
    </div>
        <div class="card-body">
           <form method="POST" action="" enctype="multipart/form-data">
            @csrf
           
            
            <div class="form-group">
                <label for="id_modul">Pilih Modul</label>
                <select name="id_modul" class="form-control" id="">
                    <option value="">Modul 1</option>
                    <option value="">Modul 2</option>
                    <option value="">Modul 3</option>
                </select>
            </div>

            <div class="form-group">
                <label for="judul_materi">Judul Materi</label>
                <input type="text" name="judul_materi" class="form-control" required>
            </div>
            
            
            <div class="form-group">
                <label for="isi_materi">Isi Materi</label>
                <textarea name="isi_materi" class="form-control" id="" cols="50" rows="10"></textarea>
            </div>
     
            <button type="submit" class="btn btn-primary float-right">Simpan</button>
         </form>
        </div>
    
</div>
@endsection
