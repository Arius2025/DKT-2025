{{-- navbar.blade.php --}}

{{-- 1. Desktop Navbar (Sticky Top) - HANYA Muncul di layar Besar (lg dan lebih besar) --}}
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-lg sticky-top d-none d-lg-block" data-aos="fade-down"> 
  <div class="container">
    <a class="navbar-brand fw-bold text-success" href="{{ route('home') }}">
      <i class="bi bi-hospital-fill me-2 fs-4"></i> RS Baladhika Husada 
    </a>
    
    {{-- Nav Links --}}
    <div class="d-flex" id="navMenuDesktop">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0"> 
        {{-- Menggunakan class nav-link-custom untuk gaya pill modern --}}
        <li class="nav-item mx-1">
          <a class="nav-link-custom {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link-custom {{ request()->routeIs('informasi') ? 'active' : '' }}" href="{{ route('informasi') }}">Informasi</a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link-custom {{ request()->routeIs('jadwal') ? 'active' : '' }}" href="{{ route('jadwal') }}">Jadwal</a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link-custom {{ request()->routeIs('ppid') ? 'active' : '' }}" href="{{ route('ppid') }}">PPID</a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link-custom {{ request()->routeIs('zona') ? 'active' : '' }}" href="{{ route('zona') }}">Zona Integritas</a>
        </li>
        {{-- Tombol Login --}}
        <li class="nav-item ms-lg-3">
            <a class="btn btn-outline-success btn-sm align-self-center fw-bold" href="/login">
                <i class="bi bi-person-fill me-1"></i> Login
            </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

{{-- 2. Mobile Navbar (Fixed Bottom) - HANYA Muncul di layar Kecil (kurang dari lg) --}}
<nav class="nav-mobile-fixed d-lg-none">
    <div class="container-fluid">
        <div class="d-flex justify-content-around w-100">
            
            {{-- Menggunakan class nav-link-mobile untuk fixed bottom nav --}}
            <a class="nav-link-mobile {{ request()->routeIs('home') ? 'active-mobile' : '' }}" href="{{ route('home') }}">
                <i class="bi bi-house-door-fill"></i>
                <span class="small d-block">Beranda</span>
            </a>
            
            <a class="nav-link-mobile {{ request()->routeIs('informasi') ? 'active-mobile' : '' }}" href="{{ route('informasi') }}">
                <i class="bi bi-info-circle-fill"></i>
                <span class="small d-block">Info</span>
            </a>
            
            <a class="nav-link-mobile {{ request()->routeIs('jadwal') ? 'active-mobile' : '' }}" href="{{ route('jadwal') }}">
                <i class="bi bi-calendar-check-fill"></i>
                <span class="small d-block">Jadwal</span>
            </a>
            
            <a class="nav-link-mobile {{ request()->routeIs('ppid') ? 'active-mobile' : '' }}" href="{{ route('ppid') }}">
                <i class="bi bi-file-earmark-lock-fill"></i>
                <span class="small d-block">PPID</span>
            </a>
            
            <a class="nav-link-mobile {{ request()->routeIs('zona') ? 'active-mobile' : '' }}" href="{{ route('zona') }}">
                <i class="bi bi-star-fill"></i>
                <span class="small d-block">Zona Int.</span>
            </a>
        </div>
    </div>
</nav>