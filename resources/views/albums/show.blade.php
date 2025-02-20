@include('layout.header')
@include('layout.menu')
@include('layout.navbar')
<br>
<br>
<br>

<div class="container mt-5">
    <h2>Detail Album</h2>

    <div class="card border-0 shadow-sm rounded">
        <div class="card-body">
            <h4>{{ $album->nama_album }}</h4>
            <p><strong>Album ID:</strong> {{ $album->albumid }}</p>
            <p><strong>Deskripsi:</strong> {{ $album->deskripsi }}</p>
            <p><strong>Tanggal Dibuat:</strong> {{ $album->tglbuat }}</p>
            <p><strong>Total Foto:</strong> {{ $album->ttl_foto }}</p>
            <p><strong>User ID:</strong> {{ $album->userid }}</p>
            <a href="{{ route('albums.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>

@include('layout.footer')

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
