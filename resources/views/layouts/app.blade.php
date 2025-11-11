{{-- app.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RS Tk. III Baladhika Husada</title>

  {{-- Bootstrap CSS --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  {{-- Bootstrap Icons --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  {{-- AOS Animation --}}
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  {{-- Custom Styles --}}
  <style>
/* ========================================= */
/* UTILITY & GENERAL */
/* ========================================= */

body {
  background-color: #E6F4EA; /* Warna latar yang lebih lembut */
  min-height: 100vh;
}

.transition {
  transition: all 0.3s ease;
}

/* Efek angkat dan bayangan kuat saat hover */
.hover-shadow:hover, .card.hover-shadow:hover {
  transform: translateY(-5px); 
  box-shadow: 0 12px 28px rgba(0,0,0,0.2)!important; /* Bayangan lebih kuat */
}

/* Text Shadow for Hero */
.text-shadow {
  text-shadow: 0 2px 6px rgba(0,0,0,0.8);
}

/* ========================================= */
/* NAVBAR (NEW UI/UX) */
/* ========================================= */

/* Desktop Nav Link (Pill style - lebih modern) */
.nav-link-custom {
    color: #343a40 !important; /* Dark text */
    padding: 8px 15px;
    border-radius: 50px; /* Pill shape */
    transition: all 0.2s ease;
    font-weight: 500;
}
.nav-link-custom:hover {
    color: #145c32 !important; /* Darker hover text */
    background-color: #e2f0e6; /* Light background on hover */
}
.nav-link-custom.active {
    color: #ffffff !important; /* White text when active */
    background-color: #198754; /* Success green background when active */
    box-shadow: 0 4px 10px rgba(25, 135, 84, 0.4); /* Shadow for active pill */
    font-weight: 600;
}

/* Mobile Bottom Navbar */
.nav-link-mobile {
    flex: 1; /* Distribute space evenly */
    text-align: center;
    color: #6c757d !important;
    padding: 8px 0;
    transition: all 0.2s ease;
    text-decoration: none;
    line-height: 1.2;
}

.nav-link-mobile i {
    font-size: 1.3rem; /* Ukuran icon */
    margin-bottom: 2px;
}

.nav-link-mobile.active-mobile {
    color: #198754 !important; /* Active green color */
    font-weight: bold;
}

/* Fix main content overlap with fixed bottom nav on mobile */
@media (max-width: 991.98px) {
  /* Hanya diterapkan di layar mobile (ukuran < lg) */
  body {
    padding-bottom: 65px; /* Memberi ruang di bawah main content agar tidak tertutup fixed bottom nav */
  }
}

/* ========================================= */
/* HOME PAGE SECTIONS */
/* (Styles lainnya tetap dipertahankan) */
/* ========================================= */

/* Hero Banner */
.hero-banner {
  height: 400px;
  background: url('images/banner-default.jpeg') no-repeat center center/cover; /* Ganti dengan gambar banner utama Anda */
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
}
.hero-banner-overlay {
  position: absolute;
  top: 0; left: 0; right: 0; bottom: 0;
  background-color: rgba(0, 0, 0, 0.4);
}
.hero-banner-content {
  position: relative;
  z-index: 10;
  padding: 0 15px;
}

/* Fasilitas Grid */
.fasilitas-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}
.fasilitas-card {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    text-align: center;
    transition: all 0.3s ease;
}
.fasilitas-card img {
    width: 100%;
    height: 150px;
    object-fit: cover;
    border-radius: 6px;
    margin-bottom: 15px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}
.fasilitas-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

/* Testimoni Slider/Grid */
.testimoni-slider {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
}
.testimoni-card {
    background-color: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    border-left: 5px solid #198754; /* Marker hijau */
}
.testimoni-card .quote {
    font-style: italic;
    color: #555;
    margin-bottom: 15px;
    font-size: 1.1rem;
}
.testimoni-card .name {
    font-weight: bold;
    color: #198754;
    font-size: 1rem;
}

/* Tentang Kami - NEW PROFESSIONAL STYLE */
.tentang-kami-card {
    background: #fff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    display: flex;
    flex-direction: column; /* Default for mobile */
}

.tentang-kami-img {
    background: linear-gradient(135deg, #198754, #145c32);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 40px 20px;
    position: relative;
    overflow: hidden;
}

.tentang-kami-img::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: url('images/rs-pattern.png') repeat; /* Tambahkan pattern lembut jika ada */
    opacity: 0.1;
}

.karumkit-photo-wrapper {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    overflow: hidden;
    border: 5px solid #ffffff;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
    z-index: 2;
}

.karumkit-photo-wrapper img {
    object-fit: cover;
    width: 100%;
    height: 100%;
}

/* Responsive adjustments */
@media (min-width: 768px) {
    .tentang-kami-card {
        flex-direction: row; /* Desktop/Tablet: side-by-side */
    }
    .tentang-kami-img, .tentang-kami-content {
        flex: 1;
    }
}


/* ========================================= */
/* GALERI CAROUSEL (Infinite Scroll) */
/* ========================================= */

.galeri-carousel {
  overflow: hidden;
  width: 100%;
  max-width: 1200px;
  margin: auto;
  position: relative;
  background-color: #fff;
  border-color: #eee !important;
}

.galeri-track {
  display: flex;
  gap: 20px;
  animation: scroll 35s linear infinite; 
  padding: 10px 0;
}

.galeri-track img {
  min-width: 300px;
  width: 300px;
  height: 200px;
  border-radius: 8px;
  object-fit: cover;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  transition: transform 0.3s ease;
}

.galeri-carousel:hover .galeri-track {
    animation-play-state: paused;
}

@keyframes scroll {
  0% { transform: translateX(0); }
  100% { transform: translateX(-50%); } 
}

/* ========================================= */
/* TIMELINE (Gaya untuk Informasi.blade.php) */
/* ========================================= */

.timeline-list {
  position: relative;
  padding-left: 2rem;
  border-left: 3px solid #198754;
  margin-top: 1.5rem;
}

.timeline-list > div {
  position: relative;
  margin-bottom: 2rem;
  padding-left: 1rem;
}

.timeline-list .timeline-marker {
  position: absolute;
  top: 0.5rem;
  left: -1.1rem;
  width: 1rem;
  height: 1rem;
  background-color: #198754;
  border-radius: 50%;
  z-index: 1;
  box-shadow: 0 0 0 4px #E6F4EA; 
}

.timeline-content h6 {
  margin-bottom: 0.25rem;
  font-size: 1rem;
  font-weight: 600;
  color: #198754;
}

/* ========================================= */
/* LOADER / SPLASH */
/* ========================================= */

#splash {
  position: fixed;
  top: 0; left: 0;
  width: 100%; height: 100%;
  background: linear-gradient(135deg, #198754, #145c32);
  color: white;
  z-index: 10000;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  font-family: 'Segoe UI', sans-serif;
  text-align: center;
  opacity: 1;
  transition: opacity 0.8s ease;
}

#loader {
  position: fixed;
  top: 0; left: 0;
  width: 100%; height: 100%;
  background-color: rgba(230, 244, 234, 0.85);
  z-index: 9999;
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 1;
  transition: opacity 0.8s ease;
}

#splash.fade-out, #loader.fade-out {
  opacity: 0;
  pointer-events: none;
}

  </style>
</head>
<body>

  {{-- Splash Screen --}}
  <div id="splash">
    <h1>RS Baladhika Husada</h1>
    <p>Melayani dengan sepenuh hati...</p>
  </div>

  {{-- Loader --}}
  <div id="loader">
    <div class="spinner-border text-success" role="status"></div>
  </div>

  {{-- Navbar (Mengandung dua versi: desktop sticky top dan mobile fixed bottom) --}}
  @include('components.navbar')

  {{-- Main Content --}}
  <main class="container py-5">
    @yield('content')
  </main>

  {{-- Footer --}}
  @include('components.footer')

  {{-- Bootstrap JS --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  {{-- AOS JS --}}
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({ once: true, offset: 100, duration: 800 });

    // Splash then Loader
    window.addEventListener('load', function () {
    setTimeout(() => {
      document.getElementById('splash').classList.add('fade-out');
    }, 500);

    setTimeout(() => {
      document.getElementById('loader').classList.add('fade-out');
    }, 1500);
  });
  </script>
</body>
</html>