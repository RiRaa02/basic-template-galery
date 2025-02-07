@include('layout.header')
@include('layout.menu')
@include('layout.navbar')
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="container">
    <h1>Tambah Like Foto</h1>
    
    <form action="{{ route('like_fotos.store') }}" method="POST">
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

        <div class="mb-3">
            <label for="TanggalLike" class="form-label">Tanggal Like</label>
            <input type="date" name="TanggalLike" id="TanggalLike" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('like_fotos.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>

@include('layout.footer')

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
