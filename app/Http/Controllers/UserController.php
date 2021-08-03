<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = Auth::user();
        if ($user->hasRole('admin')) {
            // dapat mengakses data siswa
            $datauser = User::all();
            return view('user', ['users' => $datauser]);
        } else {
            // dialihkan ke halaman beranda
            return redirect()->route('user');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tambah_user');
       
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
        User::create([
            'foto' => $request->foto,
            'name' => $request->name,
            'email' => $request->email,
            'jeniskelamin' => $request->jeniskelamin,
            'status' => $request->status,
            'lokasi' => $request->lokasi,
            'file' => $request->file,
            'role' => $request->role,
        ]);
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user = User::where('id', $id)->first();
        return view('userdetail', ['user' => $user]);
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
        $datauser = User::find($id);
        return view('edit_user', ['user' => $datauser]);
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
        $user = User::find($id);
        $user->foto = $request->foto;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->jeniskelamin = $request->jeniskelamin;
        $user->status = $request->status;
        $user->lokasi = $request->lokasi;
        $user->file = $request->file;
        $user->role = $request->role;
        $user->save();

        return redirect()->route('users.index');
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
        $user = User::find($id);
        $user->delete();

        return redirect()->route('users.index');
    }
}
