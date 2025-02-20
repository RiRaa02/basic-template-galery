@include('layout.header')
@include('layout.menu')
@include('layout.navbar')
<br>
<br>
<br>

<div class="container mt-5">
    <h2>Edit Foto</h2>

    <form action="{{ route('fotos.update', $foto->fotoid) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="gambar" class="font-weight-bold">GAMBAR</label>
            <input type="file" class="form-control" name="gambar" id="gambar">
        </div>

        <div class="form-group">
            <label for="deskripsi_foto" class="font-weight-bold">Deskripsi Gambar</label>
            <textarea class="form-control @error('deskripsi_foto') is-invalid @enderror" name="deskripsi_foto" id="deskripsi_foto" rows="5" placeholder="Masukkan Deskripsi Gambar">{{ old('deskripsi_foto', $foto->deskripsi_foto) }}</textarea>
            
            @error('deskripsi_foto')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="tglunggah" class="font-weight-bold">Tanggal Unggah</label>
            <input type="date" class="form-control @error('tglunggah') is-invalid @enderror" name="tglunggah" id="tglunggah" value="{{ old('tglunggah', $foto->tglunggah) }}" placeholder="Masukkan Tanggal Unggah">
            
            @error('tglunggah')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="jumlah_foto" class="font-weight-bold">Jumlah Gambar</label>
            <input type="number" class="form-control @error('jumlah_foto') is-invalid @enderror" name="jumlah_foto" id="jumlah_foto" value="{{ old('jumlah_foto', $foto->jumlah_foto) }}" placeholder="Masukkan Jumlah Gambar">
            
            @error('jumlah_foto')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="albumid">Pilih Album</label>
            <select name="albumid" id="albumid" class="form-control" required>
                <option value="">Pilih Album</option>
                @foreach ($albums as $album)
                    <option value="{{ $album->albumid }}" 
                        {{ old('albumid', $foto->albumid) == $album->albumid ? 'selected' : '' }}>
                        {{ $album->albumid }} - {{ $album->nama_album }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="userid" class="font-weight-bold">User ID</label>
            <input type="text" class="form-control" id="userid" value="{{ $foto->userid }}" readonly>
            
            @error('userid')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-md btn-primary" style="background-color: darkseagreen; color: black;">UPDATE</button>
        <button type="reset" class="btn btn-md btn-warning" style="background-color: sandybrown; color: black;">RESET</button>
    </form> 
</div>

@include('layout.footer')

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
