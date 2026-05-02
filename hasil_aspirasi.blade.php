<!DOCTYPE html>
<html>
<head>
    <title>Hasil Aspirasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background: linear-gradient(to right, #a18cd1, #fbc2eb);">

<div class="container mt-5">
    <div class="card shadow-lg p-4">

        <h2 class="text-center text-primary mb-4">Aspirasi Berhasil Dikirim 💬</h2>

        <table class="table table-bordered">
            <tr>
                <th>Nama</th>
                <td>{{ $nama }}</td>
            </tr>
            <tr>
                <th>Angkatan</th>
                <td>{{ $angkatan }}</td>
            </tr>
            <tr>
                <th>Kategori</th>
                <td>{{ $kategori }}</td>
            </tr>
            <tr>
                <th>Aspirasi</th>
                <td>{{ $aspirasi }}</td>
            </tr>
        </table>

        <a href="/aspirasi" class="btn btn-primary w-100">Kembali</a>

    </div>
</div>

</body>
</html>