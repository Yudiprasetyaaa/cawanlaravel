@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="card w-100">
        @role('admin')
        <div class="card-header text-center">
            <h3>Detail Lowongan</h3>
        </div>
        @endrole
        @role('perusahaan')
        <div class="card-header text-center">
            <h3>Detail Lowongan</h3>
        </div>
        @endrole
        <div class="card-header bg-primary">
            <h1 class="col font-weight-bold text-center">{{$lowongan->nama}} </h1>
        </div>
        <div class="card-body">
            <div class="row">
                <h4 class="col"><img src="{{ Storage::url('public/').$lowongan->gambar }}" style="width: 100%" alt=""></h4>
            </div>
            <div class="row ">
                <h6 class="col text-center">{{$lowongan->email}} </h6>
            </div>
            <div class="row">
                <h6 class="col text-center">Industri : {{$lowongan->industri}} </h6>
            </div>
            <div class="row">
                <h4 class="col badge badge-dark text-center">{{$lowongan->lokasi}} </h4>
            </div>
            <div class="row">
                <h3 class="col font-wight-bold text-center">Posisi : {{$lowongan->deskripsi}}</h3>
            </div>
            <hr>
            <a href="{{route('home')}}" class="btn btn-primary float-right" >Kembali</a>
            <a href="{{route('pelamar_index.create')}}" class="btn btn-primary">Lamar Pekerjaan</a>
        </div>
    </div>
</div>
@endsection