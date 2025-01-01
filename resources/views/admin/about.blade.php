@extends('template/admin')
@section('title','Halaman About')
@section('page_name','Halaman About')
@section('data_name','Data About')
@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data About</h3>
    </div>
        <div class="card-body">
           <form method="POST" action="{{url('updateAbout')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="deskripsi">About</label>
                <textarea name="deskripsi" class="form-control" id="summernote" cols="30" rows="10" required oninvalid="this.setCustomValidity('Deskripsi Harus Diisi')" oninput="this.setCustomValidity('')">{{$about->deskripsi}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary float-right">Simpan</button>
         </form>
        </div>
    
</div>
@endsection
