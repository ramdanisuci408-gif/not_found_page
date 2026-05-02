<<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background: linear-gradient(to right, #43e97b, #38f9d7);">

<nav class="navbar navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/">Pendaftaran</a>
    <a class="navbar-brand" href="/aspirasi">Aspirasi</a>
  </div>
</nav>

<div class="container mt-5">
    <div class="card shadow-lg p-4">

        <h2 class="text-center text-success mb-4">Pendaftaran Berhasil 🎉</h2>

        <table class="table table-bordered table-striped">

            <tr>
                <th>Nama</th>
                <td>{{ $nama }}</td>
            </tr>

            <tr>
                <th>NIM</th>
                <td>{{ $nim }}</td>
            </tr>

            <tr>
                <th>Prodi</th>
                <td>{{ $prodi }}</td>
            </tr>

            <tr>
                <th>Email</th>
                <td>{{ $email }}</td>
            </tr>

            <tr>
                <th>Alasan Bergabung</th>
                <td>{{ $alasan }}</td>
            </tr>

        </table>

        <!-- tombol bawah -->
        <a href="/" class="btn btn-primary w-100">
            ← Kembali ke Form Pendaftaran
        </a>

    </div>
</div>

</body>
</html>

        