@extends('layouts.app')

@section('content')
<head>
    <title>Tentang Kami</title>
    <style>
        body {
            background-image: url("storage/bg1.png");
            background-repeat: no-repeat;
            background-size:cover
        }
      </style>
</head>
<body>
    <div class="container">
        <p class="fs-5" style="text-align: justify"><img src="storage/logoo.png" width="400" height="400" style="float: left">
            CAWAN merupakan aplikasi web portal yang bertujuan untuk mempertemukan pihak perusahaan dan calon karyawan, dengan CAWAN lamar pekerjaan lebih mudah dan cepat tanpa harus keluar rumah.
        </p>
        <p class="fs-5" style="text-align: justify">
        CAWAN : Mencari Apa Yang Anda Butuhkan!
        </p>
        <p class="fs-5" style="text-align: justify">
        Langkah-langkah menemukan Calon Karyawan :
        </p>
        <ul class="fs-5">
            <li>Daftar Akun CAWAN</li>
            <li>Lengkapi Biodata Pelamar</li>
            <li>Temukan Lowongan Pekerjaan yang Tersedia</li>
            <li>Lihat Deskripsi yang Diperlukan oleh Perusahaan</li>
            <li>Lamar Pekerjaan</li>
        </ul>
        <p class="fs-5" style="text-align: justify">
            Terimakasih Telah Menggunakan CAWAN.
        </p>
        <p class="fs-5" style="text-align: justify">
            CAWAN - Team 2021.
        </p>
    </div>

    @endsection
</body>