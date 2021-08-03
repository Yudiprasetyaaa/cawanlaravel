<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $datalowongan = Lowongan::all();
        return view('home', ['lowongan' => $datalowongan]);
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function lowongan()
    {
        $datalowongan = Lowongan::all();
        return view('lowongan_pekerjaan', ['lowongan' => $datalowongan]);
    }
    public function aboutus()
    {
        return view('about');
    }
}
