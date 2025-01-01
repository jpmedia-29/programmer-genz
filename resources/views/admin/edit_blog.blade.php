@extends('template/admin')
@section('title', 'Halaman Edit Blog')
@section('page_name', 'Halaman Edit Blog')
@section('data_name', 'Edit Data Blog')
@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Blog</h3>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ url('update_blog/' . $blog->id_blog) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="id_blog">Pilih Kategori</label>
                <select name="id_blog" class="form-control" id="">
                    @foreach ($kategori as $item)
                        <option value="{{ $item->id_kategori }}" {{ $blog->id_kategori == $item->id_kategori ? 'selected' : '' }}>
                            {{ $item->nama_kategori }}
                        </option>
                    @endforeach
                </select>
                @error('id_blog')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="judul_Blog">Judul Blog</label>
                <input type="text" name="judul_Blog" value="{{ old('judul_Blog', $blog->judul_blog) }}" class="form-control" required>
                @error('judul_Blog')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="foto">Foto Blog</label>
                @if ($blog->foto)
                    <br>
                    <img src="{{ asset('storage/' . $blog->foto) }}" alt="Foto Blog" style="max-width: 150px;">
                @endif
                <input type="file" name="foto" class="form-control mt-2">
                @error('foto')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="isi_blog">Isi Blog</label>
                <textarea name="isi_blog" id="summernote" class="form-control" cols="50" rows="10">{{ old('isi_blog', $blog->isi_blog) }}</textarea>
                @error('isi_blog')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary float-right">Simpan</button>
        </form>
    </div>
</div>

@endsection
