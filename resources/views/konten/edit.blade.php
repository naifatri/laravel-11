<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Konten</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="mb-4">Edit Konten</h1>

    <form action="{{ route('konten.update', $konten->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="konten" class="form-label">Konten:</label>
            <textarea name="konten" id="konten" class="form-control" rows="4" required>{{ $konten->konten }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="{{ route('konten.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

</body>
</html>