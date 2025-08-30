<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top" data-aos="fade-down">
  <div class="container">
    <a class="navbar-brand fw-bold text-success" href="{{ route('home') }}">
      <i class="bi bi-hospital"></i> RS Baladhika Husada
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('home') ? 'active-nav' : '' }}" href="{{ route('home') }}">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('informasi') ? 'active-nav' : '' }}" href="{{ route('informasi') }}">Informasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('jadwal') ? 'active-nav' : '' }}" href="{{ route('jadwal') }}">Jadwal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('ppid') ? 'active-nav' : '' }}" href="{{ route('ppid') }}">PPID</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('zona') ? 'active-nav' : '' }}" href="{{ route('zona') }}">Zona Integritas</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
