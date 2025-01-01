@extends('template/admin')
@section('title','Dashboard')
@section('page_name','Dashboard')
@section('data_name','Dashboard')
@section('content')

<div class="card">
    <h5 class="card-header">Dashboard</h5>
    <div class="card-body">
        <div class="row">
        
            <div class="col-lg-3 col-6">
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3>{{ $modul }}</h3>
                        <p>Data Modul</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-book"></i>
                    </div>
                    <a href="{{ url('modul') }}" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ $blog }}</h3>
                        <p>Data Blog</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-blog"></i>
                    </div>
                    <a href="{{ url('blog') }}" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $materi }}</h3>
                        <p>Data Materi</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-chalkboard-teacher"></i>
                    </div>
                    <a href="{{ url('materi') }}" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
