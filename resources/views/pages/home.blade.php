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
        <section class="mb-5" data-aos="fade-up">
            <h4 class="fw-bold text-success text-center mb-4">Berita Terbaru</h4>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="https://via.placeholder.com/400x250" class="card-img-top object-fit-cover" alt="Berita 1">
                        <div class="card-body">
                            <h6 class="fw-bold">Pembukaan Poli Anak & Gizi</h6>
                            <p class="small text-muted mb-2">20 September 2025</p>
                            <p class="card-text small">RS Baladhika Husada kini membuka poli anak dan gizi untuk melayani pasien cilik dengan lebih optimal...</p>
                            <a href="#" class="btn btn-outline-success btn-sm">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="https://via.placeholder.com/400x250" class="card-img-top object-fit-cover" alt="Berita 2">
                        <div class="card-body">
                            <h6 class="fw-bold">Pelayanan 24 Jam IGD</h6>
                            <p class="small text-muted mb-2">15 September 2025</p>
                            <p class="card-text small">Layanan IGD kami kini tersedia 24 jam dengan tim medis siaga untuk keadaan darurat medis...</p>
                            <a href="#" class="btn btn-outline-success btn-sm">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>

            
        </section>

        {{-- Testimoni & Galeri (Tambahan) --}}
        <div class="row g-4 mb-5">
            <div class="col-md-6" data-aos="fade-right">
                <h4 class="fw-bold text-success text-center mb-4">Testimoni Pasien</h4>
                <div id="testimonialCarousel" class="carousel slide bg-light rounded shadow-sm p-4" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active text-center">
                            <i class="bi bi-quote fs-1 text-success"></i>
                            <p class="lead fst-italic">"Pelayanan di sini sangat ramah dan profesional. Saya merasa nyaman selama perawatan. Terima kasih, RS Baladhika Husada!"</p>
                            <p class="fw-semibold mt-3">- Budi Santoso</p>
                        </div>
                        <div class="carousel-item text-center">
                            <i class="bi bi-quote fs-1 text-success"></i>
                            <p class="lead fst-italic">"Dokter dan perawat sangat informatif. Saya jadi lebih memahami kondisi kesehatan saya. Sangat direkomendasikan!"</p>
                            <p class="fw-semibold mt-3">- Ibu Siti</p>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-success rounded-circle" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-success rounded-circle" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <h4 class="fw-bold text-success text-center mb-4">Galeri Fasilitas</h4>
                <div class="row g-2">
                    <div class="col-6">
                        <img src="https://via.placeholder.com/300" class="img-fluid rounded shadow-sm" alt="Fasilitas 1">
                    </div>
                    <div class="col-6">
                        <img src="https://via.placeholder.com/300" class="img-fluid rounded shadow-sm" alt="Fasilitas 2">
                    </div>
                    <div class="col-6">
                        <img src="https://via.placeholder.com/300" class="img-fluid rounded shadow-sm" alt="Fasilitas 3">
                    </div>
                    <div class="col-6">
                        <img src="https://via.placeholder.com/300" class="img-fluid rounded shadow-sm" alt="Fasilitas 4">
                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection
