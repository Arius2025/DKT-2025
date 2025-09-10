@extends('layouts.app')

@section('content')
<div class="container">
  <div class="mx-auto" style="max-width: 720px;">

    {{-- Header --}}
    <div class="text-center mb-4">
      <h2 class="fw-bold text-success">Informasi Rumah Sakit</h2>
      <p class="text-muted">Profil, Visi Misi, Sejarah, Organisasi, dan Riwayat Karumkit RS Tk. III Baladhika Husada</p>
      <hr class="w-25 mx-auto border-success">
      <blockquote class="blockquote text-muted fst-italic">"Melayani dengan hati, menjaga kesehatan bangsa."</blockquote>
    </div>

    {{-- Navigasi Internal --}}
    <nav class="mb-5 text-center">
      <a href="#visi" class="btn btn-outline-success btn-sm mx-1">Visi</a>
      <a href="#misi" class="btn btn-outline-success btn-sm mx-1">Misi</a>
      <a href="#sejarah" class="btn btn-outline-success btn-sm mx-1">Sejarah</a>
      <a href="#organisasi" class="btn btn-outline-success btn-sm mx-1">Organisasi</a>
      <a href="#timeline" class="btn btn-outline-success btn-sm mx-1">Timeline</a>
      <a href="#karumkit" class="btn btn-outline-success btn-sm mx-1">Karumkit</a>
    </nav>

    {{-- Visi --}}
    <section id="visi" class="mb-5">
      <h4 class="text-success fw-bold"><i class="bi bi-eye"></i> Visi</h4>
      <p class="text-muted">Menjadi Rumah Sakit kepercayaan dan kebanggaan Prajurit, PNS dan Keluarganya di wilayah Kodam V/Brawijaya, serta masyarakat Umum di Jember dan sekitarnya.</p>
    </section>

    {{-- Misi --}}
    <section id="misi" class="mb-5">
      <h4 class="text-success fw-bold"><i class="bi bi-bullseye"></i> Misi</h4>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Menyelenggarakan dukungan kesehatan yang handal</li>
        <li class="list-group-item">Memberikan pelayanan kesehatan yang paripurna, bermutu dan terjangkau</li>
        <li class="list-group-item">Meningkatkan kemampuan personel yang profesional sesuai dengan bidang dan profesinya</li>
      </ul>
    </section>

    {{-- Sejarah --}}
<section id="sejarah" class="mb-5">
  <div class="container">
    <div class="text-center mb-4">
      <h4 class="text-success fw-bold"><i class="bi bi-journal-text"></i> Sejarah RS Baladhika Husada</h4>
      <p class="text-muted">Perjalanan panjang institusi kesehatan militer di Jember sejak 1945.</p>
      <hr class="w-25 mx-auto border-success">
    </div>

    <div class="timeline">
      <div class="timeline-item" data-aos="fade-up">
        <h6 class="fw-bold text-success">1945 – Pembentukan DKT Resimen IV</h6>
        <p class="text-muted">DKT dibentuk sebagai institusi kesehatan militer di wilayah Karesidenan Besuki.</p>
      </div>

      <div class="timeline-item" data-aos="fade-up" data-aos-delay="100">
        <h6 class="fw-bold text-success">1946 – dr. RM. Soebandi Menjadi Kepala DKT</h6>
        <p class="text-muted">Ditunjuk oleh Ir. Soekarno, dr. Soebandi memimpin DKT dengan 25 personel eks Tentara PETA.</p>
      </div>

      <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
        <h6 class="fw-bold text-success">1949 – Gugurnya Letkol dr. Soebandi</h6>
        <p class="text-muted">Beliau gugur dalam pertempuran di Karang Kedawung, Jember, dan dimakamkan di TMP Patrang.</p>
      </div>

      <div class="timeline-item" data-aos="fade-up" data-aos-delay="300">
        <h6 class="fw-bold text-success">2006 – Permintaan Sejarah Resmi</h6>
        <p class="text-muted">Surat Kakesdam V/Brawijaya menjadi dasar dokumentasi sejarah RS Tingkat III Baladhika Husada.</p>
      </div>
    </div>
  </div>
</section>


{{-- Organisasi --}}
<section id="organisasi" class="mb-5">
  <div class="container">
    <div class="text-center mb-4">
      <h4 class="text-success fw-bold"><i class="bi bi-diagram-3"></i> Organisasi / Kesatuan</h4>
      <p class="text-muted">Perjalanan institusi kesehatan militer di Jember dari 1945 hingga menjadi RS Tk. III Baladhika Husada.</p>
      <hr class="w-25 mx-auto border-success">
    </div>

    <div class="timeline">
      <div class="timeline-item" data-aos="fade-up">
        <h6 class="fw-bold text-success">1945 – Awal Pembentukan</h6>
        <p class="text-muted">DKT Resimen IV terbentuk, lokasi awal di Jl. PB. Sudirman No. 45 Jember (penyerahan dari Jepang).</p>
      </div>

      <div class="timeline-item" data-aos="fade-up" data-aos-delay="100">
        <h6 class="fw-bold text-success">1946 – Kepemimpinan dr. RM. Soebandi</h6>
        <p class="text-muted">Lokasi dipindah ke gedung milik Polri (sekarang Gedung Bhayangkara).</p>
      </div>

      <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
        <h6 class="fw-bold text-success">1947 – Perubahan Resimen</h6>
        <p class="text-muted">DKT menjadi bagian dari Resimen 40 Damarwulan Divisi VII, tetap dipimpin dr. Soebandi.</p>
      </div>

      <div class="timeline-item" data-aos="fade-up" data-aos-delay="300">
        <h6 class="fw-bold text-success">1947–1948 – Perpindahan Lokasi</h6>
        <ul class="text-muted small">
          <li>Kreongan, Kec. Patrang</li>
          <li>Alun-alun Kota Jember</li>
          <li>Kebonsari (sekarang Markas Yon Armed 8/12 Kostrad)</li>
        </ul>
      </div>

      <div class="timeline-item" data-aos="fade-up" data-aos-delay="400">
        <h6 class="fw-bold text-success">1948 – Lokasi Tetap</h6>
        <p class="text-muted">Kembali ke Jl. PB. Sudirman No. 45 Jember sebagai DKT, dipimpin dr. Soebandi.</p>
      </div>

      <div class="timeline-item" data-aos="fade-up" data-aos-delay="500">
        <h6 class="fw-bold text-success">Transformasi Nama</h6>
        <ul class="text-muted small">
          <li>RS TK. III Rem 083/BJ</li>
          <li>RS TK. III 05.06.02 Jember Dankesyah 05/04/03 Malang</li>
          <li>RS TK. III Baladhika Husada Kesdam V/Brawijaya (2003 – sekarang)</li>
        </ul>
      </div>
    </div>
  </div>
</section>


{{-- Timeline --}}
<section id="timeline" class="mb-5">
  <div class="container">
    <div class="text-center mb-4">
      <h4 class="text-success fw-bold"><i class="bi bi-clock-history"></i> Timeline Perjalanan Organisasi</h4>
      <p class="text-muted">Perjalanan institusi kesehatan militer di Jember dari awal pembentukan hingga kepemimpinan saat ini.</p>
      <hr class="w-25 mx-auto border-success">
    </div>

    <div class="timeline-list position-relative ps-4 border-start border-success">
      @foreach([
        ['1945', 'DKT Resimen IV terbentuk di Jl. PB. Sudirman No. 45 Jember'],
        ['1947', 'Pindah ke Jl. PB. Sudirman No. 48'],
        ['1950–1980', 'Berpindah ke Damaluwalu, Kreongan, Kalisat, dan Jl. Dr. Soebandi'],
        ['2006', 'Gedung baru dibangun oleh Mayor Ckm dr. Arifin'],
        ['2006', 'Resmi menjadi RS Tk. III Baladhika Husada'],
        ['2025', 'Dipimpin oleh Letkol Ckm dr. Zaltonys Tolombot, Sp.M']
      ] as $item)
      <div class="mb-4 position-relative">
        <span class="position-absolute top-0 start-0 translate-middle p-2 bg-success rounded-circle"></span>
        <div class="timeline-content">
          <h6 class="fw-bold text-success">{{ $item[0] }}</h6>
          <p class="text-muted">{{ $item[1] }}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>


    {{-- Riwayat Karumkit --}}
    <section id="karumkit" class="mb-5">
  <h4 class="text-success fw-bold"><i class="bi bi-person-lines-fill"></i> Riwayat Kepala Rumah Sakit</h4>
  <div class="row row-cols-1 row-cols-md-2 g-3">
    @foreach([
      ['Letkol dr. Soebandi', 'Tahun 1946 s.d 1949'],
      ['Mayor Cdm dr. Soedjono', 'Tahun 1959 s.d 1962'],
      ['Mayor Cdm dr. Karno Supojo', 'Tahun 1966 s.d 1969'],
      ['Kapten Cdm dr. Sam Pakpahan', 'Tahun 1969 s.d 1972'],
      ['Kapten Cdm dr. Soedomo Pradono', 'Tahun 1972 s.d 1973'],
      ['Mayor Cdm dr. Tom Uripan', 'Tahun 1973 s.d 1976'],
      ['Mayor Cdm dr. Suryono', 'Tahun 1977 s.d 1983'],
      ['Letkol Ckm dr. Koesnan D', 'Tahun 1983 s.d 1990'],
      ['Mayor Ckm dr. Budiharto', 'Januari 1991 s.d April 1991'],
      ['Mayor Ckm dr. H. Zularnain Pohan', 'Tahun 1991 s.d 1995'],
      ['Letkol Ckm Drs. Basuki, MS', 'Tahun 1997 s.d 2001'],
      ['Letkol Ckm dr. Bambang Haryatno, Sp. S', 'Tahun 2001 s.d 2004'],
      ['Letkol Ckm dr. Muhammad Ilyas, Sp. An', 'Tahun 2004 s.d 2006'],
      ['Letkol Ckm dr. Agus Sunandar, Sp. An', 'Tahun 2006 s.d 2009'],
      ['Letkol Ckm dr. Trio Tangkas W.M, Sp. PD', 'Tahun 2009 s.d 2013'],
      ['Letkol Ckm (K) dr. Dwi Ana Wahyuningrum', 'Februari 2013 s.d Desember 2013'],
      ['Letkol Ckm dr. A Rusli Budi Ansyah, Sp. B., MARS', '1 Maret 2013 s.d Maret 2016'],
      ['Letkol Ckm dr. Masri Sihombing, Sp.OT (K)., M.Kes', '1 April 2016 s.d Agustus 2018'],
      ['Letkol Ckm dr. Maksum Pandelima, Sp.OT', '1 September 2018 s.d Januari 2021'],
      ['Letkol Ckm dr. Mahyudi Sp.M., M.Kes', 'Januari 2021 s.d Mei 2023'],
      ['Letkol Ckm dr. Arif Puguh Santoso, Sp.PD., M.Kes', 'Mei 2023 s.d Agustus 2025'],
      ['Letkol Ckm dr. Zaltonys Tolombot, Sp.M', 'Agustus 2025 s.d Sekarang']
    ] as $karumkit)
    <div class="col">
      <div class="card border-success h-100 shadow-sm">
        <div class="card-body">
          <h6 class="card-title text-success fw-bold">{{ $karumkit[0] }}</h6>
          <p class="card-text text-muted">Menjabat pada periode: <strong>{{ $karumkit[1] }}</strong></p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</section>


    {{-- CTA Penutup --}}
    <div class="text-center mt-5">
      <a href="/kontak" class="btn btn-success btn-lg shadow-sm">Hubungi Kami</a>
      <p class="text-muted mt-2 small">Untuk informasi lebih lanjut atau pertanyaan seputar layanan RS, silakan klik tombol di atas.</p>
    </div>

  </div>
</div>
@endsection
