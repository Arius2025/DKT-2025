@extends('layouts.app')

@section('content')
<div class="container py-4">
  <div class="mx-auto" style="max-width: 960px;">

    {{-- Header --}}
    <div class="text-center mb-5">
      <h2 class="text-success fw-bold">Layanan Komplain & Keluhan</h2>
      <p class="text-muted">Respon cepat & solusi tepat – Kami siap mendengar dan menyelesaikan masalah Anda.</p>
      <hr class="w-25 mx-auto border-success">
    </div>

    {{-- Komplain Online --}}
    <section class="mb-5">
      <div class="row g-4">
        <div class="col-md-6">
          <div class="bg-light rounded p-4 shadow-sm h-100">
            <h5 class="text-success fw-bold mb-3"><i class="bi bi-qr-code-scan"></i> Komplain Online</h5>
            <div class="row text-center">
              <div class="col-6">
                <img src="{{ asset('images/komplain/qrkomplainwa.avif') }}" alt="QR WhatsApp" class="img-fluid rounded shadow-sm mb-2" style="max-width: 160px;">
                <p class="small text-muted">WhatsApp</p>
              </div>
              <div class="col-6">
                <img src="{{ asset('images/komplain/qrkomplainform.avif') }}" alt="QR Google Form" class="img-fluid rounded shadow-sm mb-2" style="max-width: 160px;">
                <p class="small text-muted">Google Forms</p>
              </div>
            </div>
            <p class="text-center small text-muted mt-2">Scan untuk menghubungi kami melalui platform pilihan Anda.</p>
          </div>
        </div>

        <div class="col-md-6">
          <div class="bg-light rounded p-4 shadow-sm h-100">
            <h5 class="text-success fw-bold mb-3"><i class="bi bi-person-lines-fill"></i> Narahubung Tim Komplain</h5>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <strong>KAPTEN CKM TANTOWI JAUHARI, S.Kep. Ners</strong><br>
                Ketua Tim Komplain<br>
                <i class="bi bi-telephone-fill"></i> 0853-3011-5991
              </li>
              <li class="list-group-item">
                <strong>PELTU SYAMSUL ARIFIN, S.Kep. Ners</strong><br>
                Komplain Pelayanan Medis<br>
                <i class="bi bi-telephone-fill"></i> 0812-3567-7415
              </li>
              <li class="list-group-item">
                <strong>PNS A’JALIL ACHJAB, S.Kep.Ners, MM, M.Kes</strong><br>
                Komplain BPJS<br>
                <i class="bi bi-telephone-fill"></i> 0812-3481-945
              </li>
              <li class="list-group-item">
                <strong>PELTU YOYOK TRI SUYANTO</strong><br>
                Komplain Pelayanan & Fasilitas Umum<br>
                <i class="bi bi-telephone-fill"></i> 0852-3462-9570
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    {{-- Alur Pengaduan --}}
    <section class="mb-5">
      <h5 class="text-success fw-bold mb-3 text-center"><i class="bi bi-diagram-3"></i> Alur Layanan Pengaduan</h5>
      <div class="row g-4 justify-content-center">
        <div class="col-md-6 text-center">
          <img src="{{ asset('images/komplain/komplain1.avif') }}" alt="Alur Pengaduan 1" class="img-fluid rounded shadow-sm">
        </div>
        <div class="col-md-6 text-center">
          <img src="{{ asset('images/komplain/kompain2.avif') }}" alt="Alur Pengaduan 2" class="img-fluid rounded shadow-sm">
        </div>
      </div>
      <p class="text-center small text-muted mt-3">Alur pengaduan langsung & tidak langsung – transparan dan terstruktur.</p>
    </section>

  </div>
</div>
@endsection
