@foreach($beritas as $berita)
    <div class="card mb-3">
        <img src="{{ asset('storage/' . $berita->gambar) }}" class="card-img-top">
        <div class="card-body">
            <h5>{{ $berita->judul }}</h5>
            <p>{{ Str::limit($berita->isi, 150) }}</p>
        </div>
    </div>
@endforeach
{{ $beritas->links() }}
