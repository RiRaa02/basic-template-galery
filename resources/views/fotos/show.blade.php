@include('layout.header')
@include('layout.menu')
@include('layout.navbar')
<br>
<br>
<br>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <!-- Menampilkan gambar -->
                    <div class="text-center mb-4">
                        <img src="{{ asset('storage/fotos/'.$foto->gambar) }}" class="img-fluid rounded" style="max-width: 300px;">
                    </div>

                    <hr>

                    <!-- Deskripsi foto -->
                    <h4 class="font-weight-bold">{{ $foto->deskripsi_foto }}</h4>
                    <p class="mt-3">
                        <strong>Foto ID:</strong> {{ $foto->fotoid }}
                    </p>
                    <p class="mt-3">
                        <strong>Tanggal Unggah:</strong> {{ $foto->tglunggah }}
                    </p>
                    <p class="mt-3">
                        <strong>Jumlah Gambar:</strong> {{ $foto->jumlah_foto }}
                    </p>
                    <p class="mt-3">
                        <strong>Album ID:</strong> {{ $foto->albumid }}
                    </p>
                    <p class="mt-3">
                        <strong>User ID:</strong> {{ $foto->userid }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layout.footer')

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
