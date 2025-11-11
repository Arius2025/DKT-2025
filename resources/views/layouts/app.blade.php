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
  /* Tambahkan padding di bagian bawah untuk mengatasi fixed bottom mobile nav */
  padding-bottom: 70px; /* Cukup besar untuk navbar mobile */
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
/* MOBILE NAVBAR FIX */
/* ========================================= */

/* Navbar Desktop Custom Style (Pill/Tab Look) */
.nav-link-custom {
  color: #198754; /* text-success */
  font-weight: 500;
  padding: 8px 15px;
  border-radius: 50px; /* Bentuk pill */
  transition: all 0.2s ease;
}

.nav-link-custom:hover {
  color: #fff;
  background-color: #157347; /* Hover lebih gelap */
}

.nav-link-custom.active {
  color: #fff;
  background-color: #198754; /* Warna hijau solid untuk active */
}

/* Mobile Nav (Fixed Bottom) */
.nav-mobile-fixed {
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
  z-index: 1050; /* Di atas konten tapi di bawah modal */
  background-color: white;
  box-shadow: 0 -4px 10px rgba(0,0,0,0.1);
}

.nav-link-mobile {
  text-align: center;
  padding: 8px 0;
  color: #6c757d; /* text-muted */
  text-decoration: none;
  font-size: 0.75rem; /* Ukuran font kecil untuk mobile */
  transition: color 0.2s ease;
}

.nav-link-mobile i {
  font-size: 1.2rem;
  display: block;
}

.nav-link-mobile:hover, .nav-link-mobile.active-mobile {
  color: #198754; /* text-success */
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
  {{-- DIKOREKSI: Menghapus class="container" dan hanya menyisakan padding di main --}}
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