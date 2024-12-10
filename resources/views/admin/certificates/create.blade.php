<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Sertifikat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1>Tambah Sertifikat</h1>

    <!-- Error Message -->
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Success Message -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Form -->
    <form action="{{ route('certificates.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <!-- Nama Sertifikat -->
        <div class="form-group mb-3">
            <label for="name">Certificate name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Issued By -->
        <div class="form-group mb-3">
            <label for="issued_by">Issued By</label>
            <input type="text" class="form-control @error('issued_by') is-invalid @enderror" id="issued_by" name="issued_by" value="{{ old('issued_by') }}" required>
            @error('issued_by')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Issued At -->
        <div class="form-group mb-3">
            <label for="issued_at">Issued At</label>
            <input type="date" class="form-control @error('issued_at') is-invalid @enderror" id="issued_at" name="issued_at" value="{{ old('issued_at') }}" required>
            @error('issued_at')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Deskripsi -->
        <div class="form-group mb-3">
            <label for="description">Deskripsi</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description') }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Upload File -->
        <div class="form-group mb-3">
            <label for="file">File Sertifikat (PDF)</label>
            <input type="file" class="form-control @error('file') is-invalid @enderror" id="file" name="file" accept=".pdf,.jpg,.jpeg,.png" required>
            @error('file')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Buat Sertifikat</button>
    </form>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
