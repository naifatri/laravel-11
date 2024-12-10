<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Sertifikat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- SweetAlert2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Edit Sertifikat</h5>
                        <a href="{{ route('certificates.index') }}" class="btn btn-secondary">Kembali ke Daftar</a>
                    </div>

                    <div class="card-body">
                        <!-- Alert Success - Blade Flash Messages -->
                        @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <!-- Edit Form -->
                        <form action="{{ route('certificates.update', $certificate) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="name" class="form-label">Nama Sertifikat</label>
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $certificate->name) }}" required>
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="issued_by" class="form-label">Dikeluarkan Oleh</label>
        <input type="text" name="issued_by" class="form-control @error('issued_by') is-invalid @enderror" value="{{ old('issued_by', $certificate->issued_by) }}" required>
        @error('issued_by')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="issued_at" class="form-label">Tanggal Dikeluarkan</label>
        <input type="date" name="issued_at" class="form-control @error('issued_at') is-invalid @enderror" value="{{ old('issued_at', $certificate->issued_at) }}" required>
        @error('issued_at')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Deskripsi</label>
        <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="4" required>{{ old('description', $certificate->description) }}</textarea>
        @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="file" class="form-label">File Sertifikat (PDF)</label>
        <input type="file" name="file" class="form-control @error('file') is-invalid @enderror" accept="application/pdf">
        @error('file')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        @if($certificate->file_path)
            <p><strong>File Saat Ini:</strong> <a href="{{ Storage::url($certificate->file_path) }}" target="_blank" class="btn btn-sm btn-info">Lihat PDF</a></p>
        @endif
    </div>

    <button type="submit" class="btn btn-primary">Update Sertifikat</button>
</form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>

    <script>
        // Add SweetAlert confirmation for deletion if needed
        function confirmDelete(id) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data ini akan dihapus secara permanen!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    // Simulate successful deletion or redirect to a delete route
                    window.location.href = '/certificates/' + id + '/delete';  // Adjust this URL
                }
            });
        }
    </script>
</body>
</html>
