@extends('layouts.app')

@section('content')
<body>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('storage/cover1.png')}}" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('storage/cover2.png')}}" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('storage/cover3.png')}}" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
    <br>
    <div class="container marketing">
      <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="storage/menu1.png" alt="" style="height: 350px"; object-fit:contain; width="100%">
            <h4 class="font-weight-bold"><center>Temukaan Pekerjaan Impian Anda</h4>
            <center><a href="/lowongan_pekerjaan" class="btn btn-primary m-1"> Lihat </a></center>
          </div>
          <div class="col-lg-4">
            <img class="rounded-circle" src="storage/menu2.png" alt="" style="height: 350px"; object-fit:contain; width="100%">
            <h4 class="font-weight-bold"><center>Berita Terbaru</h4>
            <center><a href="" class="btn btn-primary m-1"> Lihat </a></center>
          </div>
          <div class="col-lg-4">
            <img class="rounded-circle" src="storage/menu3.png" alt="" style="height: 350px"; object-fit:contain; width="100%">
            <h4 class="font-weight-bold"><center>Tentang Kami</h4>
            <center><a href="" class="btn btn-primary m-1"> Lihat </a></center>
          </div>
      </div>
  </div>
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
