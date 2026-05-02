<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background: linear-gradient(to right, #4facfe, #00f2fe);">

<nav class="navbar navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/">Pendaftaran</a>
    <a class="navbar-brand" href="/aspirasi">Aspirasi</a>
  </div>
</nav>

<div class="container mt-5">
    <div class="card shadow-lg p-4">

        <h2 class="text-center mb-4">Form Pendaftaran Himpunan Mahasiswa</h2>

        <form method="POST" action="/simpan">
            @csrf

            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>NIM</label>
                <input type="text" name="nim" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Prodi</label>
                <select name="prodi" class="form-control" required>
                    <option value="">-- Pilih Prodi --</option>
                    <option>Informatika</option>
                    <option>Sistem Informasi</option>
                    <option>Teknik Komputer</option>
                </select>
            </div>

            <div class="mb-3">
                <label>Email</label>
                 <input type="email" name="email" class="form-control" required>
            </div>

        <!-- INI BAGIAN ALASAN -->
            <div class="mb-3">
                <label>Alasan Bergabung</label>
                <textarea name="alasan" class="form-control" rows="3" required></textarea>
            </div>

                <button class="btn btn-primary w-100 mb-3">Daftar</button>
        </form>

        <!-- 🔻 PINDAH DI BAWAH -->
        <a href="/aspirasi" class="btn btn-warning w-100">
            → Pindah ke Form Aspirasi
        </a>

    </div>
</div>

</body>
</html>