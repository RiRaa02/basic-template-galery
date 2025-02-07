@include('layout.header')
@include('layout.menu')
@include('layout.navbar')
<br>
<br>
<br>
<br>
<br>

<div class="container mt-5">
    <h2>Detail Like Foto</h2>

    <div class="card border-0 shadow-sm rounded">
        <div class="card-body">
            <h4>ID: {{ $likeFoto->LikeID }}</h4>
            <p><strong>Foto:</strong> {{ $likeFoto->foto->JudulFoto }}</p>
            <p><strong>User:</strong> {{ $likeFoto->user->Username }}</p>
            <p><strong>Tanggal Like:</strong> {{ $likeFoto->TanggalLike }}</p>

            <a href="{{ route('like_fotos.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>

@include('layout.footer')

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
