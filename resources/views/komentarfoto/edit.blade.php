@include('layout.header')
@include('layout.menu')
@include('layout.navbar')
<br>
<br>
<br>
<br>
<br>

<div class="container mt-5">
    <h2>Edit Komentar Foto</h2>

    <form action="{{ route('komentarfoto.update', $komentarfoto->KomentarID) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="FotoID" class="form-label">Pilih Foto</label>
            <select name="FotoID" id="FotoID" class="form-control" required>
                @foreach ($fotos as $foto)
                    <option value="{{ $foto->fotoid }}" {{ $foto->fotoid == $komentarfoto->FotoID ? 'selected' : '' }}>
                        {{ $foto->fotoid }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="UserID" class="form-label">Pilih User</label>
            <select name="UserID" id="UserID" class="form-control" required>
                @foreach ($users as $user)
                    <option value="{{ $user->userid }}" {{ $user->userid == $komentarfoto->UserID ? 'selected' : '' }}>
                        {{ $user->userid }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="IsiKomentar">Komentar</label>
            <textarea class="form-control" id="IsiKomentar" name="IsiKomentar" rows="4" required>{{ $komentarfoto->IsiKomentar }}</textarea>
            @error('IsiKomentar')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="TanggalKomentar" class="font-weight-bold">Tanggal Komentar</label>
            <input type="date" class="form-control @error('TanggalKomentar') is-invalid @enderror" name="TanggalKomentar" id="TanggalKomentar" value="{{ old('TanggalKomentar', $komentarfoto->TanggalKomentar) }}" placeholder="Masukkan Tanggal Unggah">
            
            @error('TanggalKomentar')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Perbarui</button>
        <a href="{{ route('komentarfoto.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

@include('layout.footer')

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
