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
    <h2>Daftar Album</h2>
    <a href="{{ route('albums.create') }}" class="btn btn-success mb-3">Tambah Album</a>
    <a href="{{ route('albums.pdf') }}" class="btn btn-md btn-light mb-3">Export To Pdf</a>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Album</th>
                <th>Deskripsi</th>
                <th>Tanggal Dibuat</th>
                <th>Total Foto</th>
                <th>User ID</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($albums as $album)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $album->nama_album }}</td>
                <td>{!! $album->deskripsi !!}</td>
                <td>{{ $album->tglbuat }}</td>
                <td>{{ $album->ttl_foto }}</td>
                <td>{{ $album->userid }}</td>
                <td>
                    <a href="{{ route('albums.show', $album->albumid) }}" class="btn btn-primary btn-sm">Show</a>
                    <a href="{{ route('albums.edit', $album->albumid) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('albums.destroy', $album->albumid) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus album ini?')">Hapus</button>
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
