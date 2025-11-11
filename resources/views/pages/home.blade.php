{{-- home.blade.php --}}
@extends('layouts.app')

@section('content')

<main class="container py-4"> 
    {{-- Hero Banner --}}
    <div class="hero-banner mb-5 rounded shadow-lg overflow-hidden" data-aos="zoom-in"> 
        <div class="hero-banner-overlay"></div>
        <div class="hero-banner-content text-white text-center">
            <h2 class="fw-bold display-5 text-shadow" data-aos="fade-down">Rumah Sakit Tk. III Baladhika Husada</h2>
            <p class="lead mb-0 text-shadow" data-aos="fade-up" data-aos-delay="100">Melayani BPJS, Umum, dan Anggota TNI/POLRI dengan sepenuh hati</p>
        </div>
    </div>

    {{-- Tentang RS - NEW PROFESSIONAL STYLE (Rombakan Total) --}}
    <section class="mb-5" data-aos="fade-right"> 
        <div class="tentang-kami-card">
            {{-- Kiri: Foto Karumkit --}}
            <div class="tentang-kami-img text-white text-center" data-aos="fade-right">
                <div class="d-flex flex-column align-items-center">
                    <div class="karumkit-photo-wrapper mb-3">
                        {{-- Pastikan path ini benar: images/Karumkit.png --}}
                        <img src="images/Karumkit.png" alt="Kepala Rumah Sakit" loading="lazy">
                    </div>
                    <h3 class="fw-bold mb-1 text-white text-shadow">Letkol CKM dr. Zaltonys Tolombot, Sp.M</h3>
                    <p class="lead fw-light text-shadow">Kepala Rumah Sakit</p>
                    <a href="/profil-karumkit" class="btn btn-outline-light btn-sm mt-3">Baca Selengkapnya</a>
                </div>
            </div>

            {{-- Kanan: Visi & Misi / Deskripsi RS --}}
            <div class="tentang-kami-content" data-aos="fade-left" data-aos-delay="200">
                <span class="text-success fw-bold small text-uppercase">Sekilas Tentang Kami</span>
                <h2 class="fw-bolder display-6 text-dark mb-4">Komitmen Pelayanan Unggul</h2>
                
                <p class="text-muted lead">Kami berkomitmen untuk menyediakan pelayanan kesehatan terbaik yang didukung oleh **tenaga medis profesional** dan **teknologi modern**. Kami berfokus pada inovasi dan empati untuk meningkatkan mutu layanan dan kepuasan setiap pasien.</p>
                
                <div class="d-flex flex-wrap gap-4 mt-4">
                    <div class="info-item">
                        <i class="bi bi-patch-check-fill text-success fs-3"></i>
                        <h6 class="fw-bold mt-2 mb-0">Terakreditasi Paripurna</h6>
                        <p class="small text-muted mb-0">Standar layanan tertinggi.</p>
                    </div>
                    <div class="info-item">
                        <i class="bi bi-clock-history text-success fs-3"></i>
                        <h6 class="fw-bold mt-2 mb-0">Layanan 24 Jam</h6>
                        <p class="small text-muted mb-0">IGD dan Farmasi siap siaga.</p>
                    </div>
                    <div class="info-item">
                        <i class="bi bi-heart-pulse-fill text-success fs-3"></i>
                        <h6 class="fw-bold mt-2 mb-0">Fokus Pasien</h6>
                        <p class="small text-muted mb-0">Empati dan inovasi layanan.</p>
                    </div>
                </div>
                
                <a href="/visi-misi" class="btn btn-success btn-lg mt-5 shadow-sm transition hover-shadow">Visi & Misi Kami</a>
            </div>
        </div>
    </section>

    {{-- Menu Layanan --}}
    <section class="rounded p-4 mb-5" data-aos="fade-up">
        <div class="text-center mb-5"> 
            <h2 class="fw-bold text-success mb-3">Akses Layanan Cepat</h2>
            <p class="lead text-muted">Silakan pilih menu layanan yang Anda butuhkan di bawah ini.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="50">
                <div class="card h-100 border-0 shadow-sm text-center transition hover-shadow">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <i class="bi bi-hospital fs-1 text-success mb-2"></i>
                            <h5 class="fw-bold">Pendaftaran Online</h5>
                            <p class="text-muted small">Melalui Aplikasi Rumah Sakit</p>
                        </div>
                        <a href="#" class="btn btn-success mt-3">Buka Aplikasi</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm text-center transition hover-shadow">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <i class="bi bi-phone fs-1 text-success mb-2"></i>
                            <h5 class="fw-bold">Pendaftaran BPJS</h5>
                            <p class="text-muted small">Melalui Mobile JKN</p>
                        </div>
                        <a href="#" class="btn btn-success mt-3">Buka Mobile JKN</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="150">
                <div class="card h-100 border-0 shadow-sm text-center transition hover-shadow">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <i class="bi bi-book fs-1 text-success mb-2"></i>
                            <h5 class="fw-bold">E-Book</h5>
                            <p class="text-muted small">Galeri E-Book Rumah Sakit</p>
                        </div>
                        <a href="#" class="btn btn-success mt-3">Lihat E-Book</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm text-center transition hover-shadow">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <i class="bi bi-info-circle fs-1 text-success mb-2"></i>
                            <h5 class="fw-bold">Informasi RS</h5>
                            <p class="text-muted small">Fasilitas dan Profil Rumah Sakit</p>
                        </div>
                        <a href="#" class="btn btn-success mt-3">Detail Informasi</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="250">
                <div class="card h-100 border-0 shadow-sm text-center transition hover-shadow">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <i class="bi bi-megaphone fs-1 text-success mb-2"></i>
                            <h5 class="fw-bold">PPID</h5>
                            <p class="text-muted small">Layanan Pengaduan & Informasi Publik</p>
                        </div>
                        <a href="#" class="btn btn-success mt-3">Akses PPID</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow-sm text-center transition hover-shadow">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <i class="bi bi-bar-chart fs-1 text-success mb-2"></i>
                            <h5 class="fw-bold">Survei Kepuasan</h5>
                            <p class="text-muted small">Penilaian Layanan oleh Pasien</p>
                        </div>
                        <a href="#" class="btn btn-success mt-3">Isi Survei</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Fasilitas Section --}}
    <section class="fasilitas-section mb-5">
        <div class="text-center mb-5" data-aos="fade-down">
            <h2 class="fw-bold text-success mb-3">Fasilitas Unggulan Kami</h2>
            <p class="lead text-muted">Kami menyediakan fasilitas kesehatan terbaik untuk kenyamanan dan kesembuhan Anda.</p>
        </div>
        <div class="fasilitas-grid">
            <div class="fasilitas-card" data-aos="zoom-in" data-aos-delay="50">
                <img src="images/fasilitas/igd.jpeg" alt="IGD 24 Jam">
                <i class="bi bi-ambulance fs-3 text-success d-block mb-2"></i>
                <h3 class="fw-bold fs-5 text-success">IGD 24 Jam</h3>
                <p class="text-muted small">Pelayanan gawat darurat yang siap siaga 24 jam dengan tim medis terlatih.</p>
            </div>
            <div class="fasilitas-card" data-aos="zoom-in" data-aos-delay="100">
            <img src="images/fasilitas/rad.jpeg" alt="Radiologi Canggih">
                <i class="bi bi-radioactive fs-3 text-success d-block mb-2"></i>
                <h3 class="fw-bold fs-5 text-success">Radiologi Canggih</h3>
                <p class="text-muted small">Dilengkapi dengan peralatan x-ray, USG, dan CT Scan terbaru.</p>
            </div>
            <div class="fasilitas-card" data-aos="zoom-in" data-aos-delay="150">
            <img src="images/fasilitas/kamar.jpeg" alt="Rawat Inap Nyaman">
                <i class="bi bi-hospital-fill fs-3 text-success d-block mb-2"></i>
                <h3 class="fw-bold fs-5 text-success">Rawat Inap Nyaman</h3>
                <p class="text-muted small">Ruang rawat inap yang bersih, nyaman, dan didukung perawat profesional.</p>
            </div>
            <div class="fasilitas-card" data-aos="zoom-in" data-aos-delay="200">
            <img src="images/fasilitas/lab.jpeg" alt="Laboratorium">
                <i class="bi bi-droplet-half fs-3 text-success d-block mb-2"></i>
                <h3 class="fw-bold fs-5 text-success">Laboratorium</h3>
                <p class="text-muted small">Laboratorium cek NAPZA terpercaya & profesional dengan peralatan modern.</p>
            </div>
        </div>
    </section>

    {{-- Galeri Section --}}
    <section class="galeri-section mb-5">
        <div class="text-center mb-5" data-aos="fade-down">
            <h2 class="fw-bold text-success mb-3">Galeri Rumah Sakit</h2>
            <p class="lead text-muted">Lihat suasana dan fasilitas kami secara langsung.</p>
        </div>
        <div class="galeri-carousel shadow-sm rounded border" data-aos="fade-up">
            <div class="galeri-track">
                {{-- Original Images (11 items) --}}
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
                {{-- Duplicated Images for Seamless Loop (CRITICAL for infinite scroll UX) --}}
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

    {{-- Testimoni Section --}}
    <section class="testimoni-section rounded py-5" data-aos="fade-up"> 
        <div class="text-center mb-5" data-aos="fade-down">
            <h2 class="fw-bold text-success mb-3">💬 Komentar Pengunjung</h2>
            <p class="lead text-muted">Apa kata mereka tentang layanan kami.</p>
        </div>
        <div class="testimoni-slider">
            <div class="testimoni-card" data-aos="zoom-in" data-aos-delay="50">
                <p class="quote">“Pelayanannya sangat cepat dan ramah. Dokter dan perawatnya sangat membantu.”</p>
                <h4 class="name">— Bpk. Agus W.</h4>
            </div>
            <div class="testimoni-card" data-aos="zoom-in" data-aos-delay="100">
                <p class="quote">“Fasilitasnya lengkap dan bersih. Benar-benar merasa nyaman selama perawatan.”</p>
                <h4 class="name">— Ibu Rina S.</h4>
            </div>
            <div class="testimoni-card" data-aos="zoom-in" data-aos-delay="150">
                <p class="quote">“Proses administrasi mudah dan cepat. Sangat direkomendasikan!”</p>
                <h4 class="name">— Sdr. Dimas A.</h4>
            </div>
        </div>
    </section>
</main>

@endsection