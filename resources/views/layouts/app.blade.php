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


.testimoni-section {
  background: #f9fbfd;
  padding: 60px 20px;
  text-align: center;
}

.section-title {
  font-size: 2rem;
  margin-bottom: 40px;
  color: #2c3e50;
}

.testimoni-slider {
  display: flex;
  gap: 30px;
  justify-content: center;
  flex-wrap: wrap;
}

.testimoni-card {
  background: #ffffff;
  border-left: 5px solid #3498db;
  border-radius: 10px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.08);
  padding: 25px 20px;
  max-width: 320px;
  transition: transform 0.3s ease;
}

.testimoni-card:hover {
  transform: translateY(-5px);
}

.quote {
  font-style: italic;
  color: #34495e;
  margin-bottom: 15px;
}

.name {
  font-weight: bold;
  color: #2c3e50;
}

/* Galeri Section */
.galeri-section {
    text-align: center;
    margin-bottom: 3rem;
}

.galeri-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1rem;
    padding: 1rem;
}

.galeri-grid img {
    width: 100%;
    height: auto;
    border-radius: 8px;
    object-fit: cover;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.galeri-grid img:hover {
    transform: scale(1.05);
}

/* Fasilitas Section */
.fasilitas-section {
    text-align: center;
    margin-bottom: 3rem;
}

.fasilitas-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    padding: 1rem;
}

.fasilitas-card {
    background-color: #fff;
    border-radius: 12px;
    padding: 2rem 1rem;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.fasilitas-card:hover {
    transform: translateY(-5px);
}

.fasilitas-card i {
    font-size: 2.5rem;
    color: #198754;
    margin-bottom: 1rem;
}

.fasilitas-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    padding: 1rem;
}

.fasilitas-card {
    background-color: #fff;
    border-radius: 12px;
    padding: 1.5rem;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    text-align: center;
    transition: transform 0.3s ease;
}

.fasilitas-card:hover {
    transform: translateY(-5px);
}

.fasilitas-card i {
    font-size: 2rem;
    color: #198754;
    margin-bottom: 1rem;
    display: block;
}

.fasilitas-card img {
    width: 100%;
    max-width: 220px;
    height: 150px;
    object-fit: cover;
    border-radius: 8px;
    margin: 0 auto 1rem;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}

/* Testimoni Section */
.testimoni-section {
    text-align: center;
    margin-bottom: 3rem;
}

.testimoni-slider {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 2rem;
    padding: 1rem;
}

.testimoni-card {
    background-color: #f8f9fa;
    border-radius: 12px;
    padding: 1.5rem;
    max-width: 300px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.testimoni-card:hover {
    transform: translateY(-5px);
}

.testimoni-card .avatar img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 1rem;
}

.testimoni-card p {
    font-style: italic;
    color: #555;
}

.testimoni-card h4 {
    margin-top: 1rem;
    font-weight: bold;
    color: #198754;
}

/* CSS Kustom untuk Hero Banner */
.hero-banner {
  position: relative;
  width: 100%;
  /* Atur tinggi minimum agar ada ruang yang cukup */
  min-height: 400px; /* Tinggi default untuk desktop */
  background-image: url('/images/rumah sakit dkt.jpg');
  background-size: cover; /* Pastikan gambar menutupi seluruh area */
  background-position: center center; /* Pusatkan gambar */
  background-repeat: no-repeat;
  border-radius: 0.375rem; /* Sesuai dengan shadow-sm Bootstrap */
  overflow: hidden;
  box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important; /* Meniru shadow-sm */
}

/* Overlay untuk membuat teks lebih mudah dibaca */
.hero-banner-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5); /* Warna overlay hitam transparan */
  z-index: 1;
}

.hero-banner-content {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2; /* Pastikan teks di atas overlay */
  width: 90%; /* Konten tidak terlalu lebar */
  max-width: 800px; /* Batasi lebar maksimum */
}

/* Penyesuaian untuk tampilan mobile */
@media (max-width: 767.98px) { /* Untuk ukuran layar di bawah 768px (MD breakpoint Bootstrap) */
  .hero-banner {
    min-height: 300px; /* Tinggi yang lebih pendek untuk mobile */
  }

  .hero-banner-content h2 {
    font-size: 2.5rem; /* Ukuran font lebih kecil untuk judul */
  }

  .hero-banner-content p {
    font-size: 1rem; /* Ukuran font lebih kecil untuk paragraf */
  }
}

/* Efek shadow untuk teks */
.text-shadow {
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
}


    body {
      background-color: #E6F4EA;
      min-height: 100vh;
    }

    /* Splash Screen */
    /* Splash Screen */
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

#splash, #loader {
  transition: opacity 0.5s ease;
}

#splash.fade-out {
  opacity: 0;
  pointer-events: none;
}

/* Loader */
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

#loader.fade-out {
  opacity: 0;
  pointer-events: none;
}

/* Spinner Custom */
.spinner-border {
  width: 3rem;
  height: 3rem;
  animation: spin 1s linear infinite;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}


    /* Timeline, Navbar, Footer, etc... (unchanged) */
    .timeline-list { /* ... */ }
    .timeline-list::before { /* ... */ }
    .timeline-item { /* ... */ }
    .timeline-marker { /* ... */ }
    .timeline-content { /* ... */ }
    .hover-shadow:hover { /* ... */ }
    .transition { /* ... */ }
    .navbar-nav .nav-link { /* ... */ }
    .navbar-nav .nav-link:hover { /* ... */ }
    .navbar-nav .active-nav { /* ... */ }
    .navbar-brand i { /* ... */ }
    .card.hover-shadow { /* ... */ }
    .card.hover-shadow:hover { /* ... */ }
    .timeline {
  border-left: 3px solid #198754;
  padding-left: 1rem;
}/* Timeline Section */
#timeline {
  background-color: #f8fcf9;
  padding-top: 2rem;
  padding-bottom: 2rem;
}

.timeline-list {
  position: relative;
  padding-left: 2rem;
  border-left: 3px solid #198754; /* Bootstrap success green */
  margin-top: 1.5rem;
}

.timeline-list li {
  position: relative;
  margin-bottom: 2rem;
  padding-left: 1rem;
}

.timeline-list li span {
  position: absolute;
  top: 0.5rem;
  left: -1.1rem;
  width: 1rem;
  height: 1rem;
  background-color: #198754;
  border-radius: 50%;
  z-index: 1;
  box-shadow: 0 0 0 4px #f8fcf9; /* white ring for contrast */
}

.timeline-content h6 {
  margin-bottom: 0.25rem;
  font-size: 1rem;
  font-weight: 600;
  color: #198754;
}

.timeline-content p {
  margin-bottom: 0;
  font-size: 0.95rem;
  color: #6c757d; /* Bootstrap muted */
}

/* Responsive tweaks */
@media (max-width: 576px) {
  .timeline-list {
    padding-left: 1.5rem;
  }

  .timeline-list li {
    margin-bottom: 1.5rem;
  }

  .timeline-content h6 {
    font-size: 0.95rem;
  }

  .timeline-content p {
    font-size: 0.9rem;
  }
}
/* Timeline Section */
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

.timeline-list span {
  position: absolute;
  top: 0.5rem;
  left: -1.1rem;
  width: 1rem;
  height: 1rem;
  background-color: #198754;
  border-radius: 50%;
  z-index: 1;
  box-shadow: 0 0 0 4px #f8fcf9;
}

.timeline-content h6 {
  margin-bottom: 0.25rem;
  font-size: 1rem;
  font-weight: 600;
  color: #198754;
}

.timeline-content p {
  margin-bottom: 0;
  font-size: 0.95rem;
  color: #6c757d;
}

/* Responsive */
@media (max-width: 576px) {
  .timeline-list {
    padding-left: 1.5rem;
  }

  .timeline-list > div {
    margin-bottom: 1.5rem;
  }

  .timeline-content h6 {
    font-size: 0.95rem;
  }

  .timeline-content p {
    font-size: 0.9rem;
  }
  .text-shadow {
  text-shadow: 0 2px 6px rgba(0,0,0,0.6);
}

}


    [data-aos] { /* ... */ }
    footer { /* ... */ }
    footer a { /* ... */ }
    footer a:hover { /* ... */ }
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

  {{-- Navbar --}}
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
    document.querySelectorAll('.nav-link').forEach(link => {
      if (link.href === window.location.href) {
        link.classList.add('active-nav');
      }
    });

    // Splash then Loader
    window.addEventListener('load', function () {
    // Fade out splash first
    setTimeout(() => {
      document.getElementById('splash').classList.add('fade-out');
    }, 500);

    // Then fade out loader
    setTimeout(() => {
      document.getElementById('loader').classList.add('fade-out');
    }, 1500);
  });
  </script>
</body>
</html>
