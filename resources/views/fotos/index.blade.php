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

<div class="container mt-5">
    <h2>Daftar Foto</h2>
    <a href="{{ route('fotos.create') }}" class="btn btn-success mb-3">Tambah Foto</a>
    <a href="{{ route('fotos.pdf') }}" class="btn btn-md btn-light mb-3">Export To Pdf</a>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Gambar</th>
                <th>Deskripsi Gambar</th>
                <th>Tanggal Unggah</th>
                <th>Jumlah Gambar</th>
                <th>Album ID</th>
                <th>User ID</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fotos as $foto)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td class="text-center">
                    <img src="{{ asset('/storage/fotos/'.$foto->gambar) }}" class="rounded" style="width: 150px">
                </td>
                <td>{!! $foto->deskripsi_foto !!}</td>
                <td>{{ $foto->tglunggah }}</td>
                <td>{{ $foto->jumlah_foto }}</td>
                <td>{{ $foto->albumid }}</td>
                <td>{{ $foto->userid }}</td>
                <td class="text-center">
                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('fotos.destroy', $foto->fotoid) }}" method="POST">
                        <a href="{{ route('fotos.show', $foto->fotoid) }}" class="btn btn-sm btn-primary">Show</a>
                        <a href="{{ route('fotos.edit', $foto->fotoid) }}" class="btn btn-sm btn-warning">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@include('layout.footer')

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>