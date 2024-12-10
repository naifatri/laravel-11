<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Konten</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="mb-4">Tambah Konten</h1>

    <form action="{{ route('konten.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="konten" class="form-label">Konten:</label>
            <input type="text" name="konten" id="konten" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('konten.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

</body>
</html>
