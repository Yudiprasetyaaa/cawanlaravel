<?php

namespace App\Http\Controllers;

use App\Models\Pelamar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PelamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datapelamar = DB::table('lowongan')
        ->join('pelamar', 'lowongan.id_pelamar', '=', 'pelamar.id')
        ->select('pelamar.nama','pelamar.email','pelamar.foto', 'pelamar.lokasi', 'pelamar.jeniskelamin', 'pelamar.status', 'pelamar.file')->get();
        $datapelamar = Pelamar::all();
        return view('pelamar_index', ['pelamar' => $datapelamar]);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //tambah pelamar
        return view ('tambah_pelamar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Pelamar::create([
            'foto'             => $request->foto,
            'nama'             => $request->nama,
            'email'            => $request->email,
            'lokasi'           => $request->lokasi,
            'jeniskelamin'     => $request->jeniskelamin,
            'status'           => $request->status,
            'file'             => $request->file,
        ]);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //menampilkan data pelamar
        $pelamar = Pelamar::where('id',$id)->first();
        return view('detail_pelamar',['pelamar' => $pelamar]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
