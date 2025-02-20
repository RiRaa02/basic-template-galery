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
    <h2>Daftar Komentar Foto</h2>
    <a href="{{ route('komentarfoto.create') }}" class="btn btn-success mb-3">Tambah Komentar</a>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Foto ID</th>
                <th>User ID</th>
                <th>Komentar</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($komentar as $k)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $k->FotoID }}</td>
                <td>{{ $k->UserID }}</td>
                <td>{{ $k->IsiKomentar }}</td>
                <td>{{ $k->TanggalKomentar }}</td>
                <td>

                    <a href="{{ route('komentarfoto.show', $k->KomentarID) }}" class="btn btn-sm btn-primary">Show</a>
                    <a href="{{ route('komentarfoto.edit', $k->KomentarID) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('komentarfoto.destroy', $k->KomentarID) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus komentar ini?')">Hapus</button>
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

