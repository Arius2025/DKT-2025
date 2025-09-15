@extends('layouts.app')

@section('content')

<main class="container my-5">
        {{-- Hero Banner --}}
        <div class="hero-banner mb-5 rounded shadow-sm overflow-hidden">
            <div class="hero-banner-overlay"></div>
            <div class="hero-banner-content text-white text-center">
                <h2 class="fw-bold display-5 text-shadow" data-aos="fade-down">Rumah Sakit Tk. III Baladhika Husada</h2>
                <p class="lead mb-0 text-shadow" data-aos="fade-up" data-aos-delay="100">Melayani BPJS, Umum, dan Anggota TNI/POLRI dengan sepenuh hati</p>
            </div>
        </div>

        {{-- Tentang RS --}}
        <section class="bg-white rounded shadow-sm p-4 mb-5" data-aos="fade-up">
            <div class="row align-items-center">
                <div class="col-md-4 text-center mb-3 mb-md-0">
                    <div class="ratio ratio-1x1 mx-auto rounded-circle overflow-hidden shadow" style="max-width: 150px;">
                        <img src="https://via.placeholder.com/150" alt="Kepala Rumah Sakit" class="object-fit-cover w-100 h-100" loading="lazy">
                    </div>
                    <p class="mt-2 fw-semibold">Letkol CKM dr. Zaltonys Tolombot, Sp.M</p>
                </div>
                <div class="col-md-8">
                    <h4 class="text-success fw-bold">Tentang Rumah Sakit</h4>
                    <p class="text-muted">Kami berkomitmen untuk menyediakan pelayanan kesehatan terbaik yang didukung oleh tenaga medis profesional dan teknologi modern. Kami berfokus pada inovasi dan empati untuk meningkatkan mutu layanan dan kepuasan setiap pasien.</p>
                </div>
            </div>
        </section>

        {{-- Menu Layanan --}}
        <section class="bg-light rounded shadow-sm p-4 mb-5" data-aos="fade-up">
            <div class="text-center mb-4">
                <h4 class="fw-bold text-success">Kami Siap Melayani yang Anda Butuhkan</h4>
                <p class="text-muted">Silakan klik tombol di bawah ini</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm text-center transition">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <i class="bi bi-hospital fs-1 text-success mb-2"></i>
                                <h5 class="fw-bold">Pendaftaran Online</h5>
                                <p class="text-muted small">Melalui Aplikasi Rumah Sakit</p>
                            </div>
                            <a href="#" class="btn btn-success btn-sm mt-3">Buka</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm text-center transition">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <i class="bi bi-phone fs-1 text-success mb-2"></i>
                                <h5 class="fw-bold">Pendaftaran BPJS</h5>
                                <p class="text-muted small">Melalui Mobile JKN</p>
                            </div>
                            <a href="#" class="btn btn-success btn-sm mt-3">Buka</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm text-center transition">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <i class="bi bi-book fs-1 text-success mb-2"></i>
                                <h5 class="fw-bold">E-Book</h5>
                                <p class="text-muted small">Galeri E-Book Rumah Sakit</p>
                            </div>
                            <a href="#" class="btn btn-success btn-sm mt-3">Buka</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm text-center transition">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <i class="bi bi-info-circle fs-1 text-success mb-2"></i>
                                <h5 class="fw-bold">Informasi RS</h5>
                                <p class="text-muted small">Fasilitas dan Profil Rumah Sakit</p>
                            </div>
                            <a href="#" class="btn btn-success btn-sm mt-3">Buka</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm text-center transition">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <i class="bi bi-megaphone fs-1 text-success mb-2"></i>
                                <h5 class="fw-bold">PPID</h5>
                                <p class="text-muted small">Layanan Pengaduan & Informasi Publik</p>
                            </div>
                            <a href="#" class="btn btn-success btn-sm mt-3">Buka</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm text-center transition">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <i class="bi bi-bar-chart fs-1 text-success mb-2"></i>
                                <h5 class="fw-bold">Survei Kepuasan</h5>
                                <p class="text-muted small">Penilaian Layanan oleh Pasien</p>
                            </div>
                            <a href="#" class="btn btn-success btn-sm mt-3">Buka</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Berita Terbaru (Tambahan) --}}
          <section class="fasilitas-section">
        <h2>Fasilitas Kami</h2>
        <div class="fasilitas-grid">
            <div class="fasilitas-card">
                <img src="images/fasilitas/igd.jpeg" alt="Galeri 1">
                <i class="fas fa-ambulance"></i>
                <h3>IGD 24 Jam</h3>
                <p>Pelayanan gawat darurat yang siap siaga 24 jam dengan tim medis terlatih.</p>
            </div>
            <div class="fasilitas-card">
            <img src="images/fasilitas/rad.jpeg" alt="Galeri 1">
                <i class="fas fa-x-ray"></i>
                <h3>Radiologi Canggih</h3>
                <p>Dilengkapi dengan peralatan x-ray, USG, dan CT Scan terbaru.</p>
            </div>
            <div class="fasilitas-card">
            <img src="images/fasilitas/kamar.jpeg" alt="Galeri 4">
                <i class="fas fa-bed"></i>
                <h3>Rawat Inap Nyaman</h3>
                <p>Ruang rawat inap yang bersih, nyaman, dan didukung perawat profesional.</p>
            </div>
            <div class="fasilitas-card">
            <img src="images/fasilitas/lab.jpeg" alt="Galeri 4">
                <i class="fas fa-bed"></i>
                <h3>Labolatorium</h3>
                <p>"Laboratorium cek NAPZA terpercaya & profesional dan didukung perawat profesional.</p>
            </div>
        </div>
    </section>

        {{-- Testimoni & Galeri (Tambahan) --}}
        <div class="row g-4 mb-5">
        <section class="galeri-section">
  <h2>Galeri Kami</h2>
  <div class="galeri-carousel">
    <div class="galeri-track">
      <img src="images/fasilitas/ambulan.jpeg" alt="Galeri 1">
      <img src="images/fasilitas/apotek.jpeg" alt="Galeri 2">
      <img src="images/fasilitas/kamar.jpeg" alt="Galeri 3">
      <img src="images/fasilitas/lab.jpeg" alt="Galeri 4">
      <img src="images/fasilitas/poli1.jpeg" alt="Galeri 5">
      <img src="images/fasilitas/poli2.jpeg" alt="Galeri 6">
      <img src="images/fasilitas/poli3.jpeg" alt="Galeri 7">
      <img src="images/fasilitas/poli4.jpeg" alt="Galeri 8">
      <img src="images/fasilitas/poli5.jpeg" alt="Galeri 9">
      <img src="images/fasilitas/poli6.jpeg" alt="Galeri 10">
      <img src="images/fasilitas/poli7.jpeg" alt="Galeri 11">
    </div>
  </div>
</section>


    <section class="testimoni-section">
  <h2 class="section-title">💬 Komentar Pengunjung</h2>
  <div class="testimoni-slider">
    <div class="testimoni-card">
      <p class="quote">“Pelayanannya sangat cepat dan ramah. Dokter dan perawatnya sangat membantu.”</p>
      <h4 class="name">— Bpk. Agus W.</h4>
    </div>
    <div class="testimoni-card">
      <p class="quote">“Fasilitasnya lengkap dan bersih. Benar-benar merasa nyaman selama perawatan.”</p>
      <h4 class="name">— Ibu Rina S.</h4>
    </div>
    <div class="testimoni-card">
      <p class="quote">“Proses administrasi mudah dan cepat. Sangat direkomendasikan!”</p>
      <h4 class="name">— Sdr. Dimas A.</h4>
    </div>
  </div>
</section>

        </div>

    </main>

@endsection
