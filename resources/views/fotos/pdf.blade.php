<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Data Foto</h2>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Gambar</th>
                <th>Deskripsi Gambar</th>
                <th>Tanggal Unggah</th>
                <th>Jumlah Gambar</th>
                <th>Album ID</th>
                <th>User ID</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fotos as $foto)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td><img src="{{ public_path('storage/fotos/'.$foto->gambar) }}" alt="Image" style="width: 100px;"></td>
                <td>{!! $foto->deskripsi_foto !!}</td>
                <td>{{ $foto->tglunggah }}</td>
                <td>{{ $foto->jumlah_foto }}</td>
                <td>{{ $foto->albumid }}</td>
                <td>{{ $foto->userid }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
