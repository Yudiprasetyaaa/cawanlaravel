<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use App\Models\Pelamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LowonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if ($user->hasRole('perusahaan') or $user->hasRole('admin')) {
            // dapat mengakses data pelamar
            $datalowongan = Lowongan::all();
            return view('lowongan_index', ['lowongan' => $datalowongan]);
        } else {
            // dialihkan ke halaman beranda
            $datalowongan = Lowongan::all();
            return view('home', ['lowongan' => $datalowongan]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //tambah lowongan kerja
        return view ('tambah_lowongan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Lowongan::create([
            'gambar'    => $request->gambar,
            'nama'      => $request->nama,
            'email'     => $request->email,
            'industri'  => $request->industri,
            'lokasi'    => $request->lokasi,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('lowongan_index.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //lihat lowongan
        $lowongan = Lowongan::where('id', $id)->first();
        return view('lowongan_detail', ['lowongan' => $lowongan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //ubah data lowongan
        $datalowongan = Lowongan::find($id);
        return view('edit_lowongan', ['lowongan' => $datalowongan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //update data
        $lowongan = Lowongan::find($id);
        $lowongan->gambar   = $request->gambar;
        $lowongan->nama     = $request->nama;
        $lowongan->email    = $request->email;
        $lowongan->industri = $request->industri;
        $lowongan->lokasi   = $request->lokasi;
        $lowongan->deskripsi= $request->deskripsi;
        $lowongan->save();

        return redirect()->route('lowongan_index.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //hapus data lowongan
        $lowongan = Lowongan::find($id);
        $lowongan->delete();

        return redirect()->route('lowongan_index.index');
    }
}
