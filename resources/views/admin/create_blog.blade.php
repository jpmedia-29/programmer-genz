@extends('template/admin')
@section('title','Halaman Tambah Blog')
@section('page_name','Halaman Tambah Blog')
@section('data_name','Data Blog')
@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tambah Blog</h3>
    </div>
        <div class="card-body">
           <form method="POST" action="{{url('save_blog')}}" enctype="multipart/form-data">
            @csrf
           
            <div class="form-group">
                <label for="id_blog">Pilih Kategori</label>
                <select name="id_blog" class="form-control" id="">
                    @foreach ($kategori as $item)    
                         <option value="{{$item->id_kategori}}" {{ old('id_blog') == $item->id_kategori ? 'selected' : '' }}>{{$item->nama_kategori}}</option>
                    @endforeach
                </select>
                @error('id_blog')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="judul_Blog">Judul Blog</label>
                <input type="text" name="judul_Blog" value="{{ old('judul_Blog') }}" class="form-control" required>
                @error('judul_Blog')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="foto">Foto Blog</label>
                <input type="file" name="foto" class="form-control">
                @error('foto')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="isi_blog">Isi Blog</label>
                <textarea name="isi_blog" id="summernote" class="form-control" cols="50" rows="10">{{ old('isi_blog') }}</textarea>
                @error('isi_blog')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
     
            <button type="submit" class="btn btn-primary float-right">Simpan</button>
         </form>
        </div>
    
</div>
@endsection
