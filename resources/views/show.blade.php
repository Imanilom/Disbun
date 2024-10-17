<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Detail Tanaman</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            color: #333;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            border: none;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .img-fluid {
            height: 300px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #0056b3;
            border-color: #0056b3;
            padding: 10px 20px;
            border-radius: 50px;
        }
        .btn-primary:disabled {
            background-color: #ccc;
            border-color: #ccc;
        }
        footer {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 50px;
        }
        footer p {
            margin: 0;
            font-size: 14px;
        }
        .description {
            line-height: 1.6;
            margin-top: 20px;
            font-size: 1.1rem;
            color: #555;
        }
        .pagination-buttons {
            margin-top: 30px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="card">
            <h2 class="text-center">{{ $tanaman['nama'] }}</h2>
            <div class="text-center">
                <img src="{{ $tanaman['gambar'] }}" class="img-fluid" alt="Tanaman">
            </div>
            <p class="description">{{ $tanaman['deskripsi'] }}</p>
            <div class="d-flex justify-content-between pagination-buttons">
                <a href="{{ route('tanaman.show', ['id' => $tanamanIndex > 0 ? $data[$tanamanIndex - 1]['id'] : 1]) }}" 
                   class="btn btn-primary {{ $tanamanIndex === 0 ? 'disabled' : '' }}">Sebelumnya</a>
                <a href="{{ route('tanaman.show', ['id' => $tanamanIndex < count($data) - 1 ? $data[$tanamanIndex + 1]['id'] : count($data)]) }}" 
                   class="btn btn-primary {{ $tanamanIndex === count($data) - 1 ? 'disabled' : '' }}">Selanjutnya</a>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Sistem Informasi Komoditas. Semua hak dilindungi.</p>
    </footer>

</body>
</html>
