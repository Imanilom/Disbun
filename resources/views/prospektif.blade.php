<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Komoditas Prospektif Unggul</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .header-section {
            background-color: #007bff;
            color: white;
            padding: 40px 20px;
            text-align: center;
        }
        .header-section h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .header-section p {
            font-size: 1.1rem;
            font-weight: 300;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            margin-bottom: 30px;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }
        .plant-card img {
            height: 200px;
            object-fit: cover;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .card-body {
            padding: 20px;
        }
        .card-title {
            font-size: 1.2rem;
            font-weight: 500;
        }
        .card-text {
            color: #777;
            font-size: 0.9rem;
        }
        .plant-card a {
            text-decoration: none;
            color: inherit;
        }
        .footer {
            background-color: #007bff;
            color: white;
            padding: 20px;
            margin-top: 50px;
        }
        .footer p {
            margin: 0;
            font-size: 0.9rem;
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
    <div class="container">
        <h2 class="text-center mb-5">Tanaman Unggulan</h2>
        <div class="row">
            @foreach ($tanamanData as $tanaman)
            <div class="col-md-4 col-lg-3 plant-card">
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

    <!-- Footer Section -->
    <footer class="footer text-center">
        <p>&copy; 2024 Sistem Informasi Komoditas. Semua hak dilindungi.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
