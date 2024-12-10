<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Edit Project</h1>

        <form action="{{ route('admin.project.update', $project->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input 
                    type="text" 
                    class="form-control" 
                    id="judul" 
                    name="judul" 
                    value="{{ old('judul', $project->judul) }}" 
                    required>
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea 
                    class="form-control" 
                    id="deskripsi" 
                    name="deskripsi" 
                    rows="4" 
                    required>{{ old('deskripsi', $project->deskripsi) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Gambar</label>
                @if($project->image)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $project->image) }}" alt="Current image" style="max-width: 200px">
                    </div>
                @endif
                <input 
                    type="file" 
                    class="form-control" 
                    id="image" 
                    name="image">
            </div>

            <div class="mb-3">
                <label for="link" class="form-label">Link</label>
                <input 
                    type="url" 
                    class="form-control" 
                    id="link" 
                    name="link" 
                    value="{{ old('link', $project->link) }}">
            </div>

            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input 
                    type="date" 
                    class="form-control" 
                    id="tanggal" 
                    name="tanggal" 
                    value="{{ old('tanggal', $project->tanggal) }}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('admin.project.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
