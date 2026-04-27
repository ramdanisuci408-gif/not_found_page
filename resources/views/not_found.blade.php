<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <style>
        body {
            display: flex; /* Menggunakan flexbox untuk centering */
            justify-content: center; /* Centering horizontal */
            align-items: center; /* Centering vertical */
            min-height: 100vh; /* Memastikan body mengambil seluruh tinggi viewport */
            margin: 0; /* Menghapus margin default body */
            font-family: 'Arial', sans-serif; /* Font yang lebih umum */
            background-color: #f8f9fc; /* Warna latar belakang cerah */
            color: #5a5c69; /* Warna teks default */
        }

        .container-404 {
            text-align: center;
            max-width: 700px; /* Batasi lebar konten */
            padding: 20px;
        }

        .error {
            position: relative;
            font-size: 8rem; /* Ukuran font untuk angka 404 yang terlihat */
            font-weight: 500;
            line-height: 1;
            margin-bottom: 2rem; /* Jarak bawah angka 404 */
            color: #86DA98; /* Warna biru untuk angka 404 */
            z-index: 1; /* Pastikan angka utama di atas pseudo-element */
        }


        /* Gaya untuk gambar */
        .error-image {
            width: 100%; 
            max-width: 1000px; /* Memperbesar ukuran maksimal gambar lebih lanjut */
            height: auto; /* Tinggi otomatis agar proporsional */
            margin-bottom: 3rem; /* Jarak bawah gambar */
        }

        /* Gaya teks lainnya */
        .lead {
            font-size: 1.5rem; /* Sedikit lebih besar untuk lead text */
            font-weight: 400;
            margin-bottom: 1rem;
            color: #5a5c69;
        }

        .text-gray-500 {
            color: #858796;
            margin-bottom: 2rem;
        }

        /* Gaya tombol */
        .btn {
            display: inline-block;
            font-weight: 400;
            color: #fff;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            background-color: #86DA98; /* Warna biru primary */
            border: 1px solid #86DA98;
            padding: .75rem 1.5rem; /* Padding lebih besar */
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .35rem; /* Border radius sedikit lebih besar */
            text-decoration: none; /* Hapus underline */
            transition: all 0.2s ease-in-out; /* Efek transisi hover */
        }

        .btn:hover {
            background-color: #6fc682;
            border-color: #6fc682;
        }

        /* Media query untuk responsivitas */
        @media (max-width: 768px) {
            .error {
                font-size: 6rem;
            }
            .error::before {
                font-size: 10rem;
            }
            .error-image {
                width: 80%;
            }
            .lead {
                font-size: 1.25rem;
            }
        }            @media (max-width: 480px) {
            .error {
                font-size: 4rem;
            }
            .error::before {
                font-size: 8rem;
            }
            .error-image {
                width: 90%;
                max-width: 500px; /* Memperbesar ukuran maksimal gambar di mobile lebih lanjut */
            }
            .lead {
                font-size: 1rem;
            }
            .btn {
                padding: .5rem 1rem;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <div class="container-404">
        <div class="d-flex justify-content-center">
            <img class="error-image" src="{{ asset('img/Not_f.svg') }}" alt="404 Page Not Found" />
        </div>
        <div class="text-center">
            
            <p class="lead text-gray-800">Ooppss!</p> 
            <p class="text-gray-500">server tidak dapat menemukan halaman yang Anda cari.</p>
            <a class="btn mt-3 btn-primary" href="index.html">&larr; Back to Dashboard</a>
        </div>
    </div>

</body>
</html>