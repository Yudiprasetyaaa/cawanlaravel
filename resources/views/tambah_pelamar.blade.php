@extends('layouts.app')

@section('content')
<br>
<br>
<div class="container my-3 w-50" style="min-height: 500px">
    <div class="card">
        <div class="card-body">
            <h1 class=" font-weight-bold text-center">Tambah Lamaran</h1>
            <form action="{{route('pelamar_index.index')}}" method="POST">
                @csrf
                <ul class="list-group">
                    Foto Profil <input type="file" name="foto" required>
                    Nama <input type="text" name="nama" required>
                    Email <input type="text" name="email" required>
                    Lokasi <input type="text" name="lokasi" required>                 
                    Jenis Kelamin <input type="text" name="jeniskelamin" required>
                    Status Pendidikan <input name="status" required></input>
                    CV (format .jpg/.png) <input type="file" name="file" required>
                </ul>
                <hr>
                <a href="{{route('home')}}" class="btn btn-primary">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection