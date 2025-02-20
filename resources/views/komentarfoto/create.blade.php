@include('layout.header')
@include('layout.menu')
@include('layout.navbar')
<br>
<br>
<br>

<div class="container mt-5">
    <h2>Tambah Komentar Foto</h2>

    <form action="{{ route('komentarfoto.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="FotoID" class="form-label">Pilih Foto</label>
            <select name="FotoID" id="FotoID" class="form-control" required>
                <option value="">-- Pilih Foto --</option>
                @foreach ($fotos as $foto)
                    <option value="{{ $foto->fotoid }}">{{ $foto->fotoid }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="UserID" class="form-label">Pilih User</label>
            <select name="UserID" id="UserID" class="form-control" required>
                <option value="">-- Pilih User --</option>
                @foreach ($users as $user)
                    <option value="{{ $user->userid }}">{{ $user->userid }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="IsiKomentar">Komentar</label>
            <textarea class="form-control" id="IsiKomentar" name="IsiKomentar" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="TanggalKomentar">Tanggal Komentar</label>
            <input type="date" class="form-control" id="TanggalKomentar" name="TanggalKomentar" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('komentarfoto.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

@include('layout.footer')

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>