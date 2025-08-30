<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\JadwalDokter;
class JadwalDokterController extends Controller
{
public function index()
{
    $jadwal = JadwalDokter::orderBy('hari')->get();
    return view('jadwal.index', compact('jadwal'));
}

}