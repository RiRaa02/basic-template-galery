@include('layout.header')
@include('layout.menu')
@include('layout.navbar')
<br>
<br>
<br>

<div class="container mt-5">
    <h2>Edit Album</h2>

    <form action="{{ route('albums.update', $album->albumid) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama_album">Nama Album</label>
            <input type="text" class="form-control" id="nama_album" name="nama_album" value="{{ old('nama_album', $album->nama_album) }}" placeholder="Masukkan Nama Album" required>
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" placeholder="Masukkan Deskripsi" required>{{ old('deskripsi', $album->deskripsi) }}</textarea>
        </div>

        <div class="form-group">
            <label for="tglbuat">Tanggal Dibuat</label>
            <input type="date" class="form-control" id="tglbuat" name="tglbuat" value="{{ old('tglbuat', $album->tglbuat) }}" required>
        </div>

        <div class="form-group">
            <label for="ttl_foto">Total Foto</label>
            <input type="number" class="form-control" id="ttl_foto" name="ttl_foto" value="{{ old('ttl_foto', $album->ttl_foto) }}" required>
        </div>

        <div class="form-group">
            <label for="userid">User ID</label>
            <input type="text" class="form-control" id="userid" value="{{ $album->userid }}" readonly>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('albums.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

@include('layout.footer')

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>