{{-- jadwal.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
  <div class="text-center mb-5" data-aos="fade-down">
    <h2 class="fw-bold display-5 text-success">Jadwal Dokter Spesialis</h2>
    <p class="lead text-muted">Berikut adalah jadwal lengkap dokter umum dan spesialis di RS Tk. III Baladhika Husada.</p>
    <hr class="w-25 mx-auto border-success border-3">
  </div>

  <div class="row justify-content-center">
    <div class="col-lg-10">
      {{-- Schedule Container with Stronger Shadow and Border --}}
      <div class="rounded shadow-lg overflow-hidden border border-success p-2 bg-white" data-aos="fade-up">
        <img src="{{ asset('images/jadwal/jadwal1.avif') }}" alt="Jadwal Dokter Bagian 1" class="w-100 mb-0 d-block" loading="lazy">
        <img src="{{ asset('images/jadwal/jadwal2.avif') }}" alt="Jadwal Dokter Bagian 2" class="w-100 mt-0 d-block" loading="lazy">
      </div>
      <p class="text-center text-muted small mt-3 fst-italic">Gambar di atas merupakan satu jadwal utuh yang terbagi menjadi dua bagian. Mohon hubungi kami untuk konfirmasi.</p>
    </div>
  </div>

  <div class="text-center mt-5" data-aos="fade-up">
    <a href="/kontak" class="btn btn-success btn-lg shadow-lg transition hover-shadow">Hubungi Kami Sekarang</a>
    <p class="text-muted mt-2 small">Untuk konfirmasi jadwal atau pendaftaran, silakan klik tombol di atas.</p>
  </div>
</div>
@endsection