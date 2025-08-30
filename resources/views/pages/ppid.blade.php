@extends('layouts.app')

@section('content')
<div class="container">

  {{-- Header --}}
  <div class="text-center mb-5">
    <h2 class="fw-bold text-success">PPID – Pejabat Pengelola Informasi dan Dokumentasi</h2>
    <p class="text-muted">PPID berfungsi sebagai pengelola dan penyampai dokumentasi publik sesuai amanat UU 14/2008 tentang Keterbukaan Informasi Publik.</p>
    <hr class="w-25 mx-auto border-success">
    <p class="text-muted">Dengan keberadaan PPID, masyarakat dapat menyampaikan permohonan informasi lebih mudah dan tidak berbelit, karena dilayani lewat satu pintu.</p>
  </div>

  {{-- Menu Layanan --}}
  <section class="bg-light rounded shadow-sm p-4 mb-5">
    <div class="text-center mb-4">
      <h5 class="fw-bold text-success">Pilih Menu di Bawah Ini</h5>
    </div>
    <div class="row g-4 justify-content-center">

      @php
        $menus = [
          ['icon' => 'file-earmark-text', 'title' => 'Sprin', 'desc' => 'Surat Perintah Informasi', 'link' => 'https://drive.google.com/file/d/1GPzo5jJDu-MMuAuG33ifVrV_7tji_bCW/view?usp=sharing'],
          ['icon' => 'envelope-paper', 'title' => 'Surat Struktur', 'desc' => 'Struktur Informasi Rumah Sakit', 'link' => 'https://drive.google.com/file/d/1MPjo6wxXfJwObpRitpQPoMFP-qmhgJbL/view?usp=sharing'],
          ['icon' => 'info-circle', 'title' => 'Informasi RS', 'desc' => 'Fasilitas & Profil RS', 'link' => route('informasi')],
          ['icon' => 'exclamation-triangle', 'title' => 'Komplain', 'desc' => 'Layanan Pengaduan Publik', 'link' => route('komplain')],
          ['icon' => 'phone', 'title' => 'Pendaftaran Online (BPJS)', 'desc' => 'Melalui Mobile JKN', 'link' => 'https://play.google.com/store/apps/details?id=app.bpjs.mobile&hl=id&gl=US&pli=1'],
        ];
      @endphp

      @foreach($menus as $menu)
      <div class="col-md-4 col-lg-3">
        <div class="card h-100 text-center border-0 shadow-sm hover-shadow transition">
          <div class="card-body">
            <i class="bi bi-{{ $menu['icon'] }} fs-1 text-success mb-2"></i>
            <h6 class="fw-bold">{{ $menu['title'] }}</h6>
            <p class="text-muted small">{{ $menu['desc'] }}</p>
            <a href="{{ $menu['link'] }}" class="btn btn-outline-success btn-sm">Buka</a>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </section>

  {{-- Galeri Video Edukasi --}}
  <section class="mb-5">
  <div class="text-center mb-4">
    <h5 class="text-success fw-bold"><i class="bi bi-play-circle"></i> Video Edukasi Kesehatan</h5>
    <p class="text-muted">Informasi penting seputar layanan BPJS, fasilitas rumah sakit, jam kunjung, dan edukasi publik dari RS Tk. III Baladhika Husada.</p>
    <hr class="w-25 mx-auto border-success">
  </div>

  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
    @foreach([
      ['https://www.youtube.com/embed/0JI0aZKU9LA', 'Jam Kunjung Pasien – RS Tk III Baladhika Husada'],
      ['https://www.youtube.com/embed/dkERGnGThGo', 'Jam Kunjung DKT'],
      ['https://www.tiktok.com/@rsbaladhikahusadajember/video/7479249773837438263', '144 Penyakit yang Tidak Dapat Dirujuk ke Rumah Sakit'],
      ['https://www.youtube.com/embed/kCeqeFjCT00', 'PROFIL RUMAH SAKIT BALADHIKA HUSADA JEMBER'],
      ['https://www.tiktok.com/@rsbaladhikahusadajember/video/7535293723622657336', 'Pelatihan BTCLS: Peningkatan Kesiapsiagaan Tenaga Medis'],
    ] as $video)
    <div class="col" data-aos="zoom-in">
      <div class="card border-0 shadow-sm hover-shadow transition h-100">
        <div class="ratio ratio-16x9">
          <iframe src="{{ $video[0] }}" title="{{ $video[1] }}" allowfullscreen loading="lazy"></iframe>
        </div>
        <div class="card-body text-center">
          <p class="fw-semibold text-success mb-0">{{ $video[1] }}</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>

  <div class="text-center mt-5">
    <a href="/kontak" class="btn btn-success btn-lg shadow-sm">Hubungi Kami</a>
    <p class="text-muted mt-2 small">Untuk pertanyaan seputar layanan atau informasi tambahan, silakan klik tombol di atas.</p>
  </div>
</section>


</div>
@endsection
