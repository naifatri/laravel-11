<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Detail Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <h1 class="mb-4">Detail Project</h1>

        <div class="card">
            <div class="card-body">
                <h3 class="card-title">{{ $project->judul }}</h3>
                <p class="card-text"><strong>Deskripsi:</strong> {{ $project->deskripsi }}</p>
                <p class="card-text"><strong>Link:</strong> 
                    @if($project->link)
                        <a href="{{ $project->link }}" target="_blank" rel="noopener noreferrer">{{ $project->link }}</a>
                    @else
                        <span class="text-muted">Tidak ada link</span>
                    @endif
                </p>
                <p class="card-text"><strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($project->tanggal)->format('d M Y') }}</p>

                <!-- Tombol Kembali -->
                <a href="{{ route('admin.project.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
