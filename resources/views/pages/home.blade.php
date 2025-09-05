@extends('layouts.app')

@section('content')

{{-- Hero Banner --}}
<div class="hero-banner mb-5">
  <div class="hero-banner-overlay"></div>
  <div class="hero-banner-content text-white text-center">
    <h2 class="fw-bold display-5 text-shadow" data-aos="fade-down">Rumah Sakit Tk. III Baladhika Husada</h2>
    <p class="lead mb-0 text-shadow" data-aos="fade-up" data-aos-delay="100">Melayani BPJS, Umum, dan Anggota TNI/POLRI dengan sepenuh hati</p>
  </div>
</div>

  {{-- Decorative Overlay --}}
  <div class="position-absolute top-0 start-0 w-100 h-100 bg-gradient" style="background: linear-gradient(to bottom right, rgba(25,135,84,0.3), rgba(0,0,0,0.5)); z-index: 1;"></div>
</div>


{{-- Tentang RS --}}
<section class="bg-white rounded shadow-sm p-4 mb-5">
  <div class="row align-items-center">
    <div class="col-md-4 text-center mb-3 mb-md-0">
      <div class="ratio ratio-1x1 mx-auto" style="max-width: 150px;">
        <img src="/images/karumkit.webp" alt="Kepala Rumah Sakit" class="rounded-circle shadow-sm object-fit-cover w-100 h-100" loading="lazy">
      </div>
      <p class="mt-2 fw-semibold">Letkol CKM dr. Arif Puguh Santoso, Sp.PD., M.Kes</p>
    </div>
    <div class="col-md-8">
      <h5 class="text-success fw-bold">Tentang Rumah Sakit</h5>
      <p class="text-muted">Kami melayani peserta BPJS, umum, dan anggota dengan pelayanan kesehatan terbaik. Kami juga mengembangkan kegiatan untuk meningkatkan mutu pelayanan dan kepuasan pasien dan masyarakat.</p>
    </div>
  </div>
</section>

{{-- Menu Layanan --}}
<section class="bg-light rounded shadow-sm p-4">
  <div class="text-center mb-4">
    <h4 class="fw-bold text-success">Kami Siap Melayani yang Anda Butuhkan</h4>
    <p class="text-muted">Silakan klik tombol di bawah ini</p>
  </div>

  <div class="row g-4">
    @php
      $menus = [
        ['icon' => 'hospital', 'title' => 'Pendaftaran Online', 'desc' => 'Melalui Aplikasi Rumah Sakit', 'link' => 'https://dkt-jember.promedika.id/pelayanan/pasien?to-page=pasien-webservice/welcome/'],
        ['icon' => 'phone', 'title' => 'Pendaftaran BPJS', 'desc' => 'Melalui Mobile JKN', 'link' => 'https://play.google.com/store/apps/details?id=app.bpjs.mobile&hl=id&gl=US&pli=1'],
        ['icon' => 'book', 'title' => 'E-Book', 'desc' => 'Galeri E-Book Rumah Sakit', 'link' => '#'],
        ['icon' => 'info-circle', 'title' => 'Informasi RS', 'desc' => 'Fasilitas dan Profil Rumah Sakit', 'link' => route('informasi')],
        ['icon' => 'megaphone', 'title' => 'PPID', 'desc' => 'Layanan Pengaduan & Informasi Publik', 'link' => route('ppid')],
        ['icon' => 'bar-chart', 'title' => 'Survei Kepuasan', 'desc' => 'Penilaian Layanan oleh Pasien', 'link' => 'https://dkt-jember.promedika.id/pelayanan/pasien?to-page=pasien-webservice/survey/'],
      ];
    @endphp

    @foreach($menus as $menu)
    <div class="col-md-4">
      <div class="card h-100 border-0 shadow-sm text-center transition">
        <div class="card-body d-flex flex-column justify-content-between">
          <div>
            <i class="bi bi-{{ $menu['icon'] }} fs-1 text-success mb-2"></i>
            <h5 class="fw-bold">{{ $menu['title'] }}</h5>
            <p class="text-muted small">{{ $menu['desc'] }}</p>
          </div>
          <a href="{{ $menu['link'] }}" class="btn btn-success btn-sm mt-3">Buka</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</section>

@endsection
