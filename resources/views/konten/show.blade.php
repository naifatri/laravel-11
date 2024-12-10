<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Konten</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="mb-4">Detail Konten</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">ID: {{ $konten->id }}</h5>
            <p class="card-text">{{ $konten->konten }}</p>
        </div>
    </div>

    <a href="{{ route('konten.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>

</body>
</html>