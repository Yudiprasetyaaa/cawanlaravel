@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Data User</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered ">
                <tr>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Lokasi</th>
                    <th>Status Pendidikan</th>
                    <th>Jenis Kelamin</th>
                    <th>CV</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
                @foreach($users as $us)
                <tr>
                    <td class="text-center">
                        <img src="{{ Storage::url('public/').$us->foto }}" class="rounded" style="width: 150px">
                    </td>
                    <td>{{$us->name}}</td>
                    <td>{{$us->email}}</td>
                    <td>{{$us->lokasi}}</td>
                    <td>{{$us->status}}</td>
                    <td>{{$us->jeniskelamin}}</td>
                    <td class="text-center">
                        <img src="{{ Storage::url('public/').$us->file }}" class="rounded" style="width: 150px">
                    </td>
                    <td>{{$us->role}}</td>
                    <td>
                        <ul class="nav">
                            <a href="{{route('users.show', $us->id)}}" class="btn btn-primary m-1">Show</a>
                            <a href="{{route('users.edit', $us->id)}}" class="btn btn-warning m-1">Edit</a>
                            <form action="{{route('users.destroy', $us->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger m-1">Delete</button>
                            </form>
                        </ul>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection