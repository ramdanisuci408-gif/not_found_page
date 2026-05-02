<!DOCTYPE html>
<html>
<head>
    <title>Form Aspirasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background: linear-gradient(to right, #ff9a9e, #fad0c4);">

<nav class="navbar navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/">Pendaftaran</a>
    <a class="navbar-brand" href="/aspirasi">Aspirasi</a>
  </div>
</nav>

<div class="container mt-5">
    <div class="card shadow-lg p-4">

        <h2 class="text-center mb-4">Form Aspirasi Mahasiswa</h2>

        <form method="POST" action="/aspirasi/simpan">
            @csrf

            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Angkatan</label>
                <input type="text" name="angkatan" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Kategori</label>
                <select name="kategori" class="form-control" required>
                    <option value="">-- Pilih --</option>
                    <option>Fasilitas</option>
                    <option>Akademik</option>
                    <option>Kegiatan</option>
                </select>
            </div>

            <div class="mb-3">
                <label>Aspirasi</label>
                <textarea name="aspirasi" class="form-control" rows="4" required></textarea>
            </div>

            <button class="btn btn-danger w-100 mb-3">Kirim</button>

        </form>

        <!-- 🔻 PINDAH DI BAWAH -->
        <a href="/" class="btn btn-secondary w-100">
            ← Kembali ke Form Pendaftaran
        </a>

    </div>
</div>

</body>
</html>