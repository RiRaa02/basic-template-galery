@include('layout.header')
@include('layout.menu')
@include('layout.navbar')
<br>
<br>
<br>
<br>
<br>

<div class="container mt-5">
    <h2>Detail Komentar Foto</h2>

    <div class="card border-0 shadow-sm rounded">
        <div class="card-body">
            <h4>Foto ID: {{ $komentarfoto->FotoID }}</h4>
            <p><strong>User ID:</strong> {{ $komentarfoto->UserID }}</p>
            <p><strong>Komentar:</strong> {{ $komentarfoto->IsiKomentar }}</p>
            <p><strong>Tanggal Komentar:</strong> {{ $komentarfoto->TanggalKomentar }}</p>

            <a href="{{ route('komentarfoto.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>

@include('layout.footer')

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
