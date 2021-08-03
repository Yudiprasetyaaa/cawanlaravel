@extends('layouts.app')

@section('content')
<div class="container" style="min-height: 500px">
    <div class="card my-3">
        <div class="card-body">
            <h3 class="text-center">Data Lowongan yang Tersedia</h3>
            @role('admin')
            <a href="{{route('lowongan_index.create')}}">Tambah Lowongan Pekerjaan</a>
            @endrole
            @role('perusahaan')
            <a href="{{route('lowongan_index.create')}}">Tambah Lowongan Pekerjaan</a>
            @endrole
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Email Perusahaan</th>
                    <th>Industri Perusahaan</th>
                    <th>Lokasi</th>
                    <th>Deskripsi Pekerjaan</th>
                    <th>Action</th>
                </tr>
                @foreach ($lowongan as $l)
                <tr>
                    <td class="text-center">
                        <img src="{{ Storage::url('public/').$l->gambar }}" class="rounded" style="width: 150px">
                    </td>
                    <td>{{$l->nama}}</td>
                    <td>{{$l->email}}</td>
                    <td>{{$l->industri}}</td>
                    <td>{{$l->lokasi}}</td>
                    <td>{{$l->deskripsi}}</td>
                    <td>
                        <ul class="nav">
                            <a href="{{route('lowongan_index.show', $l->id)}}" class="btn btn-primary m-1">Show</a>
                            <a href="{{route('lowongan_index.edit', $l->id)}}" class="btn btn-warning m-1">Edit</a>
                            <a href="{{route('pelamar_index.index', $l->id_pelamar)}}" class="btn btn-success m-1">Pelamar</a>
                            <form action="{{route('lowongan_index.destroy', $l->id)}}" method="POST">
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