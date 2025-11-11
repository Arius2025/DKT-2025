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

  {{-- Custom Styles (Semua Perbaikan Layout dan Gaya Profesional di sini) --}}
  <style>
/* ========================================= */
/* UTILITY & GENERAL */
/* ========================================= */

body {
  background-color: #E6F4EA;
  min-height: 100vh;
  /* FIX 1: Padding di bawah body agar fixed bottom mobile nav tidak menutupi konten */
  padding-bottom: 70px; 
}

.transition {
  transition: all 0.3s ease;
}

/* Efek angkat dan bayangan kuat saat hover */
.hover-shadow:hover, .card.hover-shadow:hover {
  transform: translateY(-5px); 
  box-shadow: 0 12px 28px rgba(0,0,0,0.2)!important;
}

/* Text Shadow for Hero */
.text-shadow {
  text-shadow: 0 2px 6px rgba(0,0,0,0.6);
}

/* ========================================= */
/* NAVBAR DESKTOP & MOBILE FIXES */
/* ========================================= */

/* Navbar Desktop Custom Style */
.nav-link-custom {
  color: #198754; 
  font-weight: 500;
  padding: 8px 15px;
  border-radius: 50px; 
  transition: all 0.2s ease;
  /* FIX 2: Hapus garis bawah */
  text-decoration: none; 
}

.nav-link-custom:hover {
  color: #fff;
  background-color: #157347; 
  text-decoration: none; 
}

.nav-link-custom.active {
  color: #fff;
  background-color: #198754; 
}

/* Mobile Nav (Fixed Bottom) */
.nav-mobile-fixed {
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
  z-index: 1050; 
  background-color: white;
  box-shadow: 0 -4px 10px rgba(0,0,0,0.1);
}

.nav-link-mobile {
  text-align: center;
  padding: 8px 0;
  color: #6c757d; 
  font-size: 0.75rem; 
  transition: color 0.2s ease;
  /* FIX 2: Hapus garis bawah */
  text-decoration: none;
}

.nav-link-mobile i {
  font-size: 1.2rem;
  display: block;
}

.nav-link-mobile:hover, .nav-link-mobile.active-mobile {
  color: #198754; 
  text-decoration: none;
}

/* ========================================= */
/* HOME PAGE CUSTOM STYLES */
/* ========================================= */

/* HERO SECTION (Formal & Fix Ukuran) */
.hero-section {
    position: relative;
    height: 400px;
    /* Ganti URL gambar di bawah ini dengan nama file Anda, misal: 'images/hero.jpg' */
    background: url('images/hero-bg.jpg') center/cover no-repeat; 
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.hero-overlay {
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: rgba(0, 50, 0, 0.5); /* Overlay hijau gelap 50% */
    z-index: 1;
    border-radius: 10px;
}
.hero-content {
    position: relative;
    z-index: 2;
    padding: 20px;
    max-width: 800px;
}

/* TENTANG KAMI - GAMBAR KARUMKIT (Fix Ukuran Formal 1:1) */
.karumkit-wrapper {
    width: 180px; 
    height: 180px; 
    overflow: hidden;
    border-radius: 50%; /* Lingkaran */
    border: 5px solid #198754; 
    background-color: #fff;
}
.karumkit-wrapper img {
    object-fit: cover;
}

/* GALLERY SECTION (Slider/Carousel CSS Fix) */
.galeri-carousel {
    overflow-x: scroll; 
    overflow-y: hidden;
    white-space: nowrap; 
    padding-bottom: 15px; 
    scroll-snap-type: x mandatory; 
    -webkit-overflow-scrolling: touch;
    max-width: 100%;
}
.galeri-track img {
    height: 220px; 
    width: auto;
    margin-right: 15px;
    border-radius: 8px;
    object-fit: cover;
    display: inline-block;
    scroll-snap-align: start;
    transition: transform 0.3s ease;
}
.galeri-track img:hover {
    transform: scale(1.05);
}

/* TESTIMONI SECTION */
.testimoni-section {
    background: #198754; 
    color: white;
}
.testimoni-slider {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 30px;
}
.testimoni-card {
    background: rgba(255, 255, 255, 0.1);
    color: white;
    border-left: 5px solid #ffc107; 
    border-radius: 10px;
    padding: 20px;
    max-width: 300px;
    flex: 1 1 300px;
    margin-bottom: 20px;
}
.testimoni-card .quote {
    font-style: italic;
    font-size: 1.1rem;
}
.testimoni-card .name {
    margin-top: 15px;
    font-weight: 600;
    color: #ffc107;
}

/* ========================================= */
/* SPLASH & LOADER */
/* ========================================= */

#splash, #loader {
  position: fixed;
  top: 0; left: 0;
  width: 100%; height: 100%;
  background-color: rgba(230, 244, 234, 0.85);
  z-index: 9999;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  opacity: 1;
  transition: opacity 0.8s ease;
}

#loader .spinner-border {
  width: 3rem;
  height: 3rem;
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
    <h1 class="text-success">RS Baladhika Husada</h1>
    <p class="text-muted">Melayani dengan sepenuh hati...</p>
  </div>

  {{-- Loader --}}
  <div id="loader">
    <div class="spinner-border text-success" role="status"></div>
  </div>

  {{-- Navbar --}}
  @include('components.navbar')

  {{-- Main Content --}}
  {{-- FIX 3: Hapus class="container" dari sini untuk menghindari container ganda di home.blade.php --}}
  <main class="py-5">
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

    // Highlight active nav
    document.querySelectorAll('.nav-link-custom').forEach(link => {
      if (link.href === window.location.href) {
        link.classList.add('active');
      }
    });

    // Kode JS untuk Smooth Scroll Galeri
    const galeriCarousel = document.querySelector('.galeri-carousel');
    if (galeriCarousel) {
        galeriCarousel.addEventListener('wheel', (e) => {
            if (e.deltaY !== 0) {
                e.preventDefault();
                galeriCarousel.scrollLeft += e.deltaY;
            }
        });
    }

    // Handle Splash Screen and Loader
    window.addEventListener('load', function() {
      // Hilangkan Splash Screen
      const splash = document.getElementById('splash');
      if (splash) {
        splash.classList.add('fade-out');
        setTimeout(() => splash.style.display = 'none', 800);
      }
      
      // Hilangkan Loader
      const loader = document.getElementById('loader');
      if (loader) {
        loader.classList.add('fade-out');
        setTimeout(() => loader.style.display = 'none', 800);
      }
    });
  </script>
</body>
</html>