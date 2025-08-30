@extends('layouts.app')

@section('content')
<div class="container">
  <div class="text-center mb-5">
    <h2 class="fw-bold text-success">Jadwal Dokter</h2>
    <p class="text-muted">Berikut adalah jadwal lengkap dokter umum dan spesialis di RS Tk. III Baladhika Husada.</p>
    <hr class="w-25 mx-auto border-success">
  </div>

  <div class="row justify-content-center">
    <div class="col-lg-10">
      <div class="rounded shadow overflow-hidden">
        <img src="{{ asset('images/jadwal/jadwal1.avif') }}" alt="Jadwal Dokter Bagian 1" class="w-100 mb-0" loading="lazy">
        <img src="{{ asset('images/jadwal/jadwal2.avif') }}" alt="Jadwal Dokter Bagian 2" class="w-100 mt-0" loading="lazy">
      </div>
      <p class="text-center text-muted small mt-2">Gambar di atas merupakan satu jadwal utuh yang terbagi menjadi dua bagian.</p>
    </div>
  </div>

  <div class="text-center mt-5">
    <a href="/kontak" class="btn btn-success btn-lg shadow-sm">Hubungi Kami</a>
    <p class="text-muted mt-2 small">Untuk konfirmasi jadwal atau pendaftaran, silakan klik tombol di atas.</p>
  </div>
</div>
@endsection
