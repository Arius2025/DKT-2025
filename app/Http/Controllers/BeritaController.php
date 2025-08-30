<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
class BeritaController extends Controller
{
    $beritas = Berita::latest()->paginate(5);
    return view('berita.index', compact('beritas'));
}
