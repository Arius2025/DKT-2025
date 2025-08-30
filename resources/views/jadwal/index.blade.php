<table class="table">
    <thead>
        <tr><th>Nama</th><th>Spesialis</th><th>Hari</th><th>Jam</th></tr>
    </thead>
    <tbody>
        @foreach($jadwal as $dokter)
            <tr>
                <td>{{ $dokter->nama_dokter }}</td>
                <td>{{ $dokter->spesialisasi }}</td>
                <td>{{ $dokter->hari }}</td>
                <td>{{ $dokter->jam }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
