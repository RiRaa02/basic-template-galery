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
    <h1>Daftar Like Foto</h1>
    <a href="{{ route('like_fotos.create') }}" class="btn btn-success mb-3">Tambah Like Foto</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Foto</th>
                <th>User</th>
                <th>Tanggal Like</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($likeFotos as $likeFoto)
                <tr>
                    <td>{{ $likeFoto->LikeID }}</td>
                    <td>{{ $likeFoto->foto->fotoid }}</td>
                    <td>{{ $likeFoto->user->userid }}</td>
                    <td>{{ $likeFoto->TanggalLike }}</td>
                    <td>
                        <a href="{{ route('like_fotos.show', $likeFoto->LikeID) }}" class="btn btn-primary btn-sm">Show</a>
                        <a href="{{ route('like_fotos.edit', $likeFoto->LikeID) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('like_fotos.destroy', $likeFoto->LikeID) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
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