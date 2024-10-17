<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Komoditas Prospektif Unggul</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .header-section {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .plant-card {
            margin-bottom: 30px;
        }
        .plant-card img {
            height: 150px;
            object-fit: cover;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <div class="header-section">
        <h1>Komoditas Prospektif Unggul</h1>
        <p>Menampilkan informasi tentang komoditas tanaman yang memiliki potensi tinggi untuk dikembangkan.</p>
    </div>

    <!-- Tanaman Section -->
    <div class="container mt-4">
        <h2 class="text-center mb-4">Tanaman Unggulan</h2>
        <div class="row">
            @foreach ($tanamanData as $tanaman)
            <div class="col-md-3 plant-card">
                <a href="{{ route('tanaman.show', ['id' => $tanaman['id']]) }}">
                    <div class="card">
                        <img src="{{ $tanaman['gambar'] }}" class="card-img-top" alt="{{ $tanaman['nama'] }}">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $tanaman['nama'] }}</h5>
                            <p class="card-text">Nama Ilmiah: <em>{{ $tanaman['namaIlmiah'] }}</em></p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

    <footer class="text-center mt-4">
        <p>&copy; 2024 Sistem Informasi Komoditas. Semua hak dilindungi.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>