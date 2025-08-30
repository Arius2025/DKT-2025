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
