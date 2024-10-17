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
        }
        .card {
            border: none;
        }
        .img-fluid {
            height: 300px;
            object-fit: cover;
        }
        footer {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 20px 0;
        }
    </style>
</head>
<body>

    <div class="container mt-5">
        <h2 class="text-center">{{ $tanaman['nama'] }}</h2>
        <div class="text-center">
            <img src="{{ $tanaman['gambar'] }}" class="img-fluid rounded" alt="Tanaman">
        </div>
        <p class="mt-4">{{ $tanaman['deskripsi'] }}</p>
        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('tanaman.show', ['id' => $tanamanIndex > 0 ? $data[$tanamanIndex - 1]['id'] : 1]) }}" class="btn btn-primary {{ $tanamanIndex === 0 ? 'disabled' : '' }}">Sebelumnya</a>
            <a href="{{ route('tanaman.show', ['id' => $tanamanIndex < count($data) - 1 ? $data[$tanamanIndex + 1]['id'] : count($data)]) }}" class="btn btn-primary {{ $tanamanIndex === count($data) - 1 ? 'disabled' : '' }}">Selanjutnya</a>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Sistem Informasi Komoditas. Semua hak dilindungi.</p>
    </footer>

</body>
</html>