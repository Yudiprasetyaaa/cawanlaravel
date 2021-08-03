@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Edit Lowongan Pekerjaan</h1>
        </div>
        <div class="card-body">
            <form action="{{route('lowongan_index.update', $lowongan->id) }}" method="POST">
                @csrf
                @method('PUT')
                <ul class="list-group">
                    Gambar              <input type="file" name="gambar" required value="{{$lowongan->gambar}}">
                    Nama                <input type="text" name="nama" required value="{{$lowongan->nama}}" >
                    Email Perusahaan    <input type="text" name="email" required value="{{$lowongan->email}}" >
                    Industri Perusahaan <input type="text" name="industri" required value="{{$lowongan->industri}}" >
                    Lokasi              <input type="text" name="lokasi" required value="{{$lowongan->Lokasi}}" >
                    Lowongan Pekerjaan  <input type="text" name="deskripsi" required value="{{$lowongan->deskripsi}}" >
                </ul>
                <hr>
                <a href="{{route('lowongan_index.index')}}" class="btn btn-primary">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection