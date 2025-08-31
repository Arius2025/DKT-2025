<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function informasi()
    {
        return view('pages.informasi');
    }

    public function jadwal()
    {
        return view('pages.jadwal');
    }

    public function berita()
    {
        // Jika nanti pakai database:
        // $beritas = Berita::latest()->take(5)->get();
        // return view('pages.berita', compact('beritas'));

        return view('pages.berita'); // sementara statis
    }

    public function ppid()
    {
        return view('pages.ppid');
    }

    public function zona()
    {
        return view('pages.zona');
    }
    public function komplain()
    {
        return view('pages.komplain');
    }
    
}
