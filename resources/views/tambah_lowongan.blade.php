@extends('layouts.app')

@section('content')
<br>
<br>
<div class="container my-3 w-50" style="min-height: 500px">
    <div class="card">
        <div class="card-body">
            <h1>Tambah Lowongan Pekerjaan</h1>
            <form action="{{route('lowongan_index.index')}}" method="POST">
                @csrf
                <ul class="list-group">
                    Gambar <input type="file" name="gambar" required>
                    Nama <input type="text" name="nama" required>
                    Email Perusahaan <input type="text" name="email" required>
                    Industri Perusahaan <input type="text" name="industri" required>
                    Lokasi <input type="text" name="lokasi" required>                 
                    Deskripsi Pekerjaan <textarea name="deskripsi" required></textarea>
                </ul>
                <hr>
                <a href="{{route('lowongan_index.index')}}" class="btn btn-primary">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection