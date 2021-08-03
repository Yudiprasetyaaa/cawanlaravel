@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Edit Profil Pelamar</h1>
        </div>
        <div class="card-body">
            <form action="{{route('users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <ul class="list-group">
                    Foto Profil <input type="file" name="foto" required value="{{$user->foto}}">
                    Nama <input type="text" name="name" required value="{{$user->name}}">
                    Email <input type="text" name="email" required value="{{$user->email}}" >
                    Jenis Kelamin <input type="text" name="jeniskelamin" required value="{{$user->jeniskelamin}}" >
                    Status Pendidikan <input type="text" name="status" required value="{{$user->status}}" >
                    Lokasi <input type="text" name="lokasi" required value="{{$user->lokasi}}" >
                    CV (.jpg/.png) <input type="file" name="file" required value="{{$user->file}}">
                    Role 
                    <select name="role" id="">
                    <option value="pelamar" {{($user->role == "pelamar") ? "selected" : ""}}>Pelamar</option>
                </select>
                   
                </ul>
                <hr>
                <a href="{{route('users.index')}}" class="btn btn-primary">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection