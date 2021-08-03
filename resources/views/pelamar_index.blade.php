@extends('layouts.app')

@section('content')
<div class="container" style="min-height: 500px">
    <div class="card my-3">
        <div class="card-body">
            <h3>Daftar Pelamar</h3>
            @role('admin')
            <a href="{{route('pelamar_index.create')}}">Tambah Pelamar</a>
            @endrole
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Lokasi</th>
                    <th>Jenis Kelamin</th>
                    <th>Status Pendidikan</th>
                    <th>File</th>
                    <th>Action</th>
                </tr>
                @foreach ($pelamar as $p)
                <tr>
                    <td class="text-center">
                        <img src="{{ Storage::url('public/').$p->foto }}" class="rounded" style="width: 150px">
                    </td>
                    <td>{{$p->nama}}</td>
                    <td>{{$p->email}}</td>
                    <td>{{$p->lokasi}}</td>
                    <td>{{$p->jeniskelamin}}</td>
                    <td>{{$p->status}}</td>
                    <td class="text-center">
                        <img src="{{ Storage::url('public/').$p->file }}" class="rounded" style="width: 150px">
                    </td>
                    <td>
                        <ul class="nav">
                            <a href="{{route('pelamar_index.show', $p->id)}}" class="btn btn-primary m-1">Show</a>
                            @role('admin')
                            <a href="{{route('pelamar_index.edit', $p->id)}}" class="btn btn-warning m-1">Edit</a>
                            <form action="{{route('pelamar_index.destroy', $p->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger m-1">Delete</button>
                            @endrole
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