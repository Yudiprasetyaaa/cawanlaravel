@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-justify">
    <div class="card w-100">
        <div class="card-header bg-primary">
            <h3 class="col font-weight-bold text-center">Detail Pelamar</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col"><img class="figure-img img-fluid rounded" src="{{ Storage::url('public/').$pelamar->foto }}" style="height: 500px"; object-fit:contain; width="70%" alt=""></div>
                <div class="col">
                    <div class="row">
                        <h3 class="col">Nama Lengkap : {{$pelamar->nama}} </h3>
                    </div>
                    <div class="row">
                        <h3 class="col">Alamat Email : {{$pelamar->email}} </h3>
                    </div>
                    <div class="row">
                        <h3 class="col">Lokasi : {{$pelamar->lokasi}} </h3>
                    </div>
                    <div class="row">
                        <h3 class="col">Jenis Kelamin : {{$pelamar->jeniskelamin}} </h3>
                    </div>
                    <div class="row">
                        <h3 class="col">Status Pendidikan : {{$pelamar->status}} </h3>
                    </div>
                    <div class="row">
                        <img class="figure-img img-fluid rounded" src="{{ Storage::url('public/').$pelamar->file }}" style="height: 500px"; object-fit:contain; width="70%" alt="">
                    </div>
                    <a href="{{route('pelamar_index.index')}}" class="btn btn-primary float-right" >Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection