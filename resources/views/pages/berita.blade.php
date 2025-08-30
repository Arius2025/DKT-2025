@extends('layouts.app')

@section('content')
<h2 class="text-xl font-bold mb-4">Berita Rumah Sakit</h2>
@foreach($beritas as $berita)
  <div class="mb-4 border-b pb-2">
    <h3 class="font-semibold">{{ $berita->judul }}</h3>
    <p class="text-sm text-gray-600">{{ Str::limit($berita->isi, 150) }}</p>
  </div>
@endforeach
@endsection
