@extends('layouts.app')

@section('content')
<body>
    <div class="container">
        <div class="row">
          @foreach($lowongan as $l)
          <div class="col-lg-4">
              <img src="{{ Storage::url('public/').$l->gambar }}" alt="" style="height: 250px; object-fit:contain; width:100%">
              <h3 class = "col font-weight-bold text-center">{{$l->nama}}</h3>
              <center><p class="badge badge-dark">{{$l->lokasi}}</p></center>
              <p class="text-center">{{$l->deskripsi}}</p>
              <center>
                <a href="{{route('pelamar_index.create')}}" class="btn btn-primary">Lamar</a>
                <a href="{{route('view.show', $l->id)}}" class="btn btn-primary m-1">Lihat</a>
            </center>
          </div>
          @endforeach
        </div>
      </div>
</body>
@endsection