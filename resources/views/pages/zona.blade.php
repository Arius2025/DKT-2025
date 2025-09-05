@extends('layouts.app')

@section('content')
<div class="container py-4">
  <div class="mx-auto" style="max-width: 720px;">

    {{-- Header --}}
    <div class="text-center mb-5" data-aos="fade-down">
      <h2 class="text-success fw-bold">Zona Integritas</h2>
      <p class="text-muted">
        Komitmen RS Tk. III Baladhika Husada dalam mewujudkan <span class="fw-semibold">Wilayah Bebas dari Korupsi (WBK)</span> dan <span class="fw-semibold">Wilayah Birokrasi Bersih Melayani (WBBM)</span>.
      </p>
      <hr class="w-25 mx-auto border-success">
    </div>

    {{-- Whistle Blowing System --}}
    <section class="bg-light rounded p-4 shadow-sm mb-5" data-aos="fade-up">
      <h5 class="text-success fw-bold mb-3"><i class="bi bi-shield-lock"></i> Whistle Blowing System (WBS)</h5>
      <p class="text-muted">
        WBS adalah bagian dari Zona Integritas untuk melaporkan pelanggaran seperti korupsi, gratifikasi, konflik kepentingan, dan penyalahgunaan wewenang. Identitas pelapor dijamin kerahasiaannya.
      </p>
      <ul class="list-group list-group-flush mb-3">
        <li class="list-group-item">📌 Korupsi & Gratifikasi</li>
        <li class="list-group-item">📌 Penyalahgunaan Wewenang</li>
        <li class="list-group-item">📌 Konflik Kepentingan</li>
      </ul>
      <div class="text-center">
        <img src="{{ asset('images/Zona/qrzona.png') }}" alt="QR WBS" class="img-fluid mb-2" style="max-width: 200px;">
        <p class="small text-muted">Scan untuk pengaduan</p>
      </div>
    </section>

    {{-- Video Profil --}}
    <section class="mb-5" data-aos="fade-up">
      <h5 class="text-success fw-bold mb-3 text-center"><i class="bi bi-camera-video"></i> Video Profil & Edukasi</h5>
      <div class="ratio ratio-16x9 rounded shadow-sm mb-3">
        <iframe 
          src="https://www.youtube.com/embed/IUY4Kj2PHtI" 
          title="Profil RS" 
          allowfullscreen 
          loading="lazy">
        </iframe>
      </div>
    </section>

    {{-- Indeks Gambar --}}
    <section class="mb-5" data-aos="fade-up">
      <h5 class="text-success fw-bold mb-3 text-center"><i class="bi bi-bar-chart-line"></i> Indeks Persepsi Pelayanan</h5>
      <div class="row g-4 justify-content-center">
        <div class="col-12 col-lg-10">
          <div class="rounded shadow-sm overflow-hidden mb-3">
            <img src="{{ asset('images/Zona/zi1.jpg') }}" alt="Grafik 1" class="w-100 rounded-top" loading="lazy">
          </div>
        </div>
        <div class="col-12 col-lg-10">
          <div class="rounded shadow-sm overflow-hidden">
            <img src="{{ asset('images/Zona/zi2.jpg') }}" alt="Grafik 2" class="w-100 rounded-bottom" loading="lazy">
          </div>
        </div>
        <div class="col-12 text-center">
          <p class="text-muted small mt-2">Indeks persepsi kualitas pelayanan Triwulan III Tahun 2025.</p>
        </div>
      </div>
    </section>

    {{-- Indeks Persepsi --}}
<section class="bg-light rounded p-4 shadow-sm mb-5" data-aos="fade-up">
  <h5 class="text-success fw-bold mb-3 text-center"><i class="bi bi-clipboard-data"></i> Indeks Persepsi Triwulan III 2025</h5>
  <div class="row">
    {{-- IPAK --}}
    <div class="col-12 mb-4">
      <h6 class="fw-bold">🛡️ Indeks Persepsi Anti Korupsi (IPAK)</h6>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Diskriminasi Pelayanan: <span class="badge bg-success">94.75</span></li>
        <li class="list-group-item">Kecurangan Pelayanan: <span class="badge bg-success">95.00</span></li>
        <li class="list-group-item">Gratifikasi: <span class="badge bg-success">95.75</span></li>
        <li class="list-group-item">Pungutan Liar: <span class="badge bg-success">96.00</span></li>
        <li class="list-group-item">Percaloan: <span class="badge bg-success">96.00</span></li>
        <li class="list-group-item fw-bold">Rata-rata Konversi: <span class="text-success">95.99 – A / Bersih dari Korupsi</span></li>
      </ul>
    </div>

    {{-- IKP --}}
    <div class="col-12">
      <h6 class="fw-bold">💬 Indeks Persepsi Kualitas Pelayanan (IKP)</h6>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Informasi: <span class="badge bg-success">94.68</span></li>
        <li class="list-group-item">Persyaratan: <span class="badge bg-success">94.68</span></li>
        <li class="list-group-item">Prosedur: <span class="badge bg-success">94.68</span></li>
        <li class="list-group-item">Jangka Waktu: <span class="badge bg-success">92.09</span></li>
        <li class="list-group-item">Tarif/Biaya: <span class="badge bg-success">93.22</span></li>
        <li class="list-group-item">Sarana dan Prasarana: <span class="badge bg-success">94.68</span></li>
        <li class="list-group-item">Petugas Pelayanan: <span class="badge bg-success">95.92</span></li>
        <li class="list-group-item">Layanan Pengaduan/Konsultasi: <span class="badge bg-success">95.92</span></li>
        <li class="list-group-item fw-bold">Rata-rata Konversi: <span class="text-success">94.89 – A / Sangat Baik</span></li>
      </ul>
    </div>
  </div>
</section>


    {{-- Form Pelaporan --}}
    <section class="mb-5" data-aos="fade-up">
      <h5 class="text-success fw-bold mb-3"><i class="bi bi-envelope-paper"></i> Formulir Pelaporan</h5>
      <form method="POST" action="">
        @csrf
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
          <label for="laporan" class="form-label">Isi Laporan</label>
          <textarea class="form-control" id="laporan" name="laporan" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-success w-100 shadow-sm">Kirim Laporan</button>
        <p class="text-muted small mt-2 text-center">Laporan Anda akan diproses secara rahasia dan profesional.</p>
      </form>
    </section>

  </div>
</div>
@endsection
