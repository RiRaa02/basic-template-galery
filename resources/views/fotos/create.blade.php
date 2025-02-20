@include('layout.header')
@include('layout.menu')
@include('layout.navbar')
<br>
<br>
<br>

<div class="container mt-5">
    <h2>Tambah Foto</h2>

    <form action="{{ route('fotos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" class="form-control" id="gambar" name="gambar" required>
        </div>

        <div class="form-group">
            <label for="deskripsi_foto">Deskripsi Gambar</label>
            <textarea class="form-control" id="deskripsi_foto" name="deskripsi_foto" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="tglunggah">Tanggal Unggah</label>
            <input type="date" class="form-control" id="tglunggah" name="tglunggah" required>
        </div>

        <div class="form-group">
            <label for="jumlah_foto">Jumlah Gambar</label>
            <input type="number" class="form-control" id="jumlah_foto" name="jumlah_foto" required>
        </div>

        <div class="form-group">
            <label for="albumid">Album</label>
            <select class="form-control" id="albumid" name="albumid" required>
                <option value="">Pilih Album</option>
                @foreach ($albums as $album)
                    <option value="{{ $album->albumid }}">{{ $album->nama_album }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="userid">User</label>
            <input type="text" class="form-control" value="{{ Auth::user()->userid }} - {{ Auth::user()->username }}" readonly>
            <input type="hidden" name="userid" value="{{ Auth::user()->userid }}">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('fotos.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

@include('layout.footer')

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
