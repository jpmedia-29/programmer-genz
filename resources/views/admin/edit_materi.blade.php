@extends('template/admin')
@section('title','Halaman Edit Materi')
@section('page_name','Halaman Edit Materi')
@section('data_name','Data Materi')
@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Materi</h3>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ url('update_materi', $materi->id_materi) }}" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group">
                <label for="id_modul">Pilih Modul</label>
                <select name="id_modul" class="form-control" id="">
                    @foreach ($modul as $item)
                        <option value="{{ $item->id_modul }}" 
                            {{ $item->id_modul == $materi->id_modul ? 'selected' : '' }}>
                            {{ $item->nama_modul }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="judul_materi">Judul Materi</label>
                <input type="text" name="judul_materi" class="form-control" value="{{ $materi->judul_materi }}" required>
            </div>

            <div class="form-group">
                <label for="materi">Isi Materi</label>
                <textarea name="materi" id="summernote" class="form-control" cols="50" rows="10">{{ $materi->materi }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary float-right">Simpan</button>
        </form>
    </div>
</div>

@endsection
