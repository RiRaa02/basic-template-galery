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
    <h2>Data Album</h2>
    <table>
        <thead>
            <tr>
            <th>Nama Album</th>
                <th>Deskripsi</th>
                <th>Tanggal Dibuat</th>
                <th>Total Foto</th>
                <th>User ID</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($albums as $album)
                <tr>
                    <td>{{ $album->albumid }}</td>
                    <td>{{ $album->deskripsi }}</td>
                    <td>{{ $album->tglbuat }}</td>
                    <td>{{ $album->ttl_foto }}</td>
                    <td>{{ $album->userid }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
