@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Edit Profil Pelamar</h1>
        </div>
        <div class="card-body">
            <form action=" {{ Auth::user()->id }}" method="POST">
                @csrf
                @method('PUT')
                <ul class="list-group">
                    Foto Profil <input type="file" name="foto" required value="{{Auth::user()->foto}}">
                    Nama <input type="text" name="name" required value="{{Auth::user()->name}}">
                    Email <input type="text" name="email" required value="{{Auth::user()->email}}" >
                    Jenis Kelamin <input type="text" name="jeniskelamin" required value="{{Auth::user()->jeniskelamin}}" >
                    Status Pendidikan <input type="text" name="status" required value="{{Auth::user()->status}}" >
                    Lokasi <input type="text" name="lokasi" required value="{{Auth::user()->lokasi}}" >
                    CV (.jpg/.png) <input type="file" name="file" required value="{{Auth::user()->file}}">               
                </ul>
                <hr>
                <a href="{{route('profil.index')}}" class="btn btn-primary">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection