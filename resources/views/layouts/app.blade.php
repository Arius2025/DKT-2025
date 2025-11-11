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
  text-shadow: 0 2px 6px rgba(0,0,0,0.6);
}

/* ========================================= */
/* NAVBAR CUSTOM (Desktop) */
/* ========================================= */

.nav-link-custom {
  font-weight: 600;
  color: #3498db; /* Biru muda */
  border-radius: 50px;
  padding: 8px 18px;
  transition: all 0.3s;
}

.nav-link-custom:hover, .nav-link-custom.active {
  color: white;
  background-color: #2ecc71; /* Hijau sukses */
  box-shadow: 0 4px 10px rgba(46, 204, 113, 0.4);
}

.nav-link-custom.active {
  pointer-events: none;
}

/* ========================================= */
/* NAVBAR MOBILE (Fixed Bottom) */
/* ========================================= */

.nav-link-mobile {
  color: #3498db;
  text-align: center;
  padding: 10px 0;
  text-decoration: none;
  font-size: 1.5rem;
  transition: all 0.3s;
  flex-grow: 1;
}

.nav-link-mobile .small {
    font-size: 0.7rem!important;
    font-weight: 600;
    margin-top: -5px;
}

.nav-link-mobile.active-mobile {
  color: #2ecc71; /* Warna hijau sukses untuk aktif */
  border-top: 3px solid #2ecc71;
}

/* ========================================= */
/* HERO SECTION - Updated for 2 Columns */
/* ========================================= */

.hero-section {
  position: relative;
  height: 500px; /* Tambah tinggi untuk memberi ruang bagi gambar */
  background: url('images/hero-bg.jpg') no-repeat center center/cover;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
  display: flex;
  align-items: center; 
}

/* Penyesuaian untuk tampilan mobile */
@media (max-width: 992px) {
  .hero-section {
    height: 380px; /* Lebih pendek di HP */
    align-items: flex-end; /* Konten lebih ke bawah di HP */
  }
}

.hero-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 50, 0, 0.65); /* Darker overlay */
  z-index: 1;
}

.hero-content {
  position: relative;
  z-index: 2;
  width: 100%;
  padding: 0 15px; /* Tambahkan padding agar konten tidak mepet */
}


/* ========================================= */
/* TENTANG KAMI CARD */
/* ========================================= */
.tentang-kami-card {
  display: flex;
  flex-direction: row;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 6px 20px rgba(0,0,0,0.1);
}

.tentang-kami-img {
  background-color: #2ecc71; /* Warna hijau solid */
  padding: 40px;
  flex: 0 0 35%; /* Mengambil 35% lebar di desktop */
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
}

.karumkit-photo-wrapper {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  overflow: hidden;
  border: 5px solid rgba(255, 255, 255, 0.7);
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

.karumkit-photo-wrapper img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.tentang-kami-content {
  background-color: #fff;
  flex: 1; /* Mengambil sisa lebar */
}

@media (max-width: 768px) {
  .tentang-kami-card {
    flex-direction: column; /* Ubah menjadi tumpukan di mobile */
  }
  .tentang-kami-img {
    flex: 0 0 100%;
    padding: 30px;
  }
}


/* ========================================= */
/* GALERI SECTION (Horizontal Scroll) */
/* ========================================= */
.galeri-section {
    background-color: #f9f9f9;
    padding-top: 50px;
    padding-bottom: 50px;
    margin-top: 30px;
}

.galeri-carousel {
  overflow-x: auto;
  white-space: nowrap;
  padding-bottom: 10px; /* Ruang untuk scrollbar */
}

.galeri-track {
  display: inline-flex;
  gap: 15px;
  padding: 0 15px;
}

.galeri-track img {
  width: 300px; /* Lebar setiap gambar */
  height: 200px; /* Tinggi yang sama */
  object-fit: cover;
  border-radius: 10px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s;
}

.galeri-track img:hover {
    transform: scale(1.03);
}

/* ========================================= */
/* TESTIMONI SECTION */
/* ========================================= */
.testimoni-section {
    background: linear-gradient(135deg, #1abc9c, #2ecc71); /* Gradient hijau segar */
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    margin-top: 40px;
}

.testimoni-slider {
  display: flex;
  gap: 30px;
  justify-content: center;
  flex-wrap: wrap;
}

.testimoni-card {
  background: #ffffff;
  border-left: 5px solid #f39c12; /* Garis kuning untuk kesan penting */
  border-radius: 10px;
  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
  padding: 30px;
  max-width: 350px;
  text-align: left;
}

.testimoni-card .quote {
  font-style: italic;
  color: #34495e;
  margin-bottom: 15px;
  line-height: 1.6;
}

.testimoni-card .name {
  font-weight: 700;
  color: #2c3e50;
  margin-top: 15px;
  border-top: 1px dashed #ecf0f1;
  padding-top: 10px;
}


/* ========================================= */
/* SPLASH & LOADER SCREENS */
/* ========================================= */
#splash {
  position: fixed;
  top: 0; left: 0;
  width: 100%; height: 100%;
  background: linear-gradient(45deg, #2ecc71, #1abc9c);
  color: white;
  z-index: 10000;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  opacity: 1;
  transition: opacity 0.8s ease;
}

#splash h1 {
  font-size: 2.5rem;
  font-weight: bold;
}

#splash p {
    font-style: italic;
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

    // Highlight active nav
    document.querySelectorAll('.nav-link-custom').forEach(link => {
      // Periksa path tanpa skema dan host
      const currentPath = window.location.pathname;
      const linkPath = new URL(link.href).pathname;

      if (linkPath === currentPath) {
        link.classList.add('active');
      }
    });

    document.querySelectorAll('.nav-link-mobile').forEach(link => {
      const currentPath = window.location.pathname;
      const linkPath = new URL(link.href).pathname;

      if (linkPath === currentPath) {
        link.classList.add('active-mobile');
      }
    });
    
    // Splash Screen Logic
    window.addEventListener('load', () => {
        const splash = document.getElementById('splash');
        const loader = document.getElementById('loader');
        
        // Sembunyikan splash screen setelah 1.5 detik
        setTimeout(() => {
            if (splash) splash.classList.add('fade-out');
        }, 1500);

        // Sembunyikan loader setelah 2.5 detik (termasuk waktu splash)
        setTimeout(() => {
            if (loader) loader.classList.add('fade-out');
        }, 2500);
    });
  </script>
</body>
</html>