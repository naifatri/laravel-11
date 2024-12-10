<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Certificate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Certificate Detail</h2>
        
        <div class="card">
            <div class="card-header">
                <h4>{{ $certificate->name }}</h4>
            </div>
            <div class="card-body">
                <p><strong>Description:</strong> {{ $certificate->description }}</p>
                <p><strong>Issued By:</strong> {{ $certificate->issued_by }}</p>
                <p><strong>Issued At:</strong> {{ $certificate->issued_at }}</p>
                <!-- Menampilkan file jika ada -->
                <p><strong>File:</strong> 
                    @if($certificate->file_path)
                        <a href="{{ asset('storage/' . $certificate->file_path) }}" target="_blank">Download</a>
                    @else
                        No file available.
                    @endif
                </p>
            </div>
            <div class="card-footer">
                <a href="{{ route('certificates.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
