<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistem Informasi Komoditas</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            align-items: center;
            text-align: center;
        }
        .hero {
            background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.7)), url('https://source.unsplash.com/1600x900/?nature,field');
            background-size: cover;
            color: white;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
        }
        .hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
        }
        .hero p {
            font-size: 1.25rem;
            margin-top: 10px;
        }
        .card-section h2 {
            font-weight: 700;
            margin-bottom: 2rem;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
        }
        .card-title {
            font-size: 1.5rem;
            font-weight: 600;
        }
        .card-text {
            font-size: 1rem;
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        footer {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 50px;
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <section class="hero">
        <h1>Selamat Datang di Sistem Informasi Komoditas</h1>
        <p>Menyediakan informasi terbaru tentang komoditas.</p>
    </section>

    <!-- Informasi Terbaru -->
    <div class="container card-section">
        <h2 class="text-center">Informasi Terbaru</h2>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://source.unsplash.com/400x300/?agriculture" class="card-img-top" alt="Informasi 1">
                    <div class="card-body">
                        <h5 class="card-title">Informasi 1</h5>
                        <p class="card-text">Deskripsi tentang informasi terbaru 1.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://source.unsplash.com/400x300/?farm" class="card-img-top" alt="Informasi 2">
                    <div class="card-body">
                        <h5 class="card-title">Informasi 2</h5>
                        <p class="card-text">Deskripsi tentang informasi terbaru 2.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://source.unsplash.com/400x300/?crops" class="card-img-top" alt="Informasi 3">
                    <div class="card-body">
                        <h5 class="card-title">Informasi 3</h5>
                        <p class="card-text">Deskripsi tentang informasi terbaru 3.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Komoditas Section -->
    <div class="container card-section">
        <h2 class="text-center mb-4">Komoditas</h2>
        <div class="row justify-content-center">
            <div class="col-md-3 mb-4">
                <a href="/strategis">
                    <div class="card komoditas-icon">
                        <img src="https://source.unsplash.com/400x300/?tea" class="card-img-top" alt="Komoditas Strategis">
                        <div class="card-body text-center">
                            <h5 class="card-title">Komoditas Strategis</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="/prospektif">
                    <div class="card komoditas-icon">
                        <img src="https://source.unsplash.com/400x300/?coffee" class="card-img-top" alt="Komoditas Prospektif Unggul">
                        <div class="card-body text-center">
                            <h5 class="card-title">Komoditas Prospektif Unggul</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="/lokal">
                    <div class="card komoditas-icon">
                        <img src="https://source.unsplash.com/400x300/?rubber" class="card-img-top" alt="Komoditas Lokal">
                        <div class="card-body text-center">
                            <h5 class="card-title">Komoditas Lokal</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Sistem Informasi Komoditas. Semua hak dilindungi.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
