<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Daftar Project</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <h1 class="mb-4">Daftar Project</h1>

        <!-- Tombol untuk membuat project baru -->
        <div class="mb-3">
            <a href="{{ route('admin.project.create') }}" class="btn btn-primary">Buat Project Baru</a>
        </div>

        <!-- Cek apakah ada data project -->
        @if($projects->count() == 0)
            <div class="alert alert-warning">
                Belum ada project yang terdaftar.
            </div>
        @else
            <!-- Tabel daftar project -->
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered" id="myTable">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Link</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Looping data project -->
                        @foreach($projects as $project)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $project->judul }}</td>
                                <td>{{ Str::limit($project->deskripsi, 100) }}</td>
                                <td>
                                    @if($project->link)
                                        <a href="{{ $project->link }}" target="_blank" rel="noopener noreferrer">{{ $project->link }}</a>
                                    @else
                                        <span class="text-muted">Tidak ada link</span>
                                    @endif
                                </td>
                                <td>{{ \Carbon\Carbon::parse($project->tanggal)->format('d M Y') }}</td>
                                <td>
                                    <!-- Tombol Detail -->
                                    <a href="{{ route('admin.project.show', $project->id) }}" class="btn btn-info btn-sm">Detail</a>

                                    <!-- Tombol Edit -->
                                    <a href="{{ route('admin.project.edit', $project->id) }}" class="btn btn-warning btn-sm edit-btn">Edit</a>

                                    <!-- Tombol Hapus dengan konfirmasi -->
                                    <form action="{{ route('admin.project.destroy', $project->id) }}" method="POST" class="d-inline delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger btn-sm delete-btn">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-4">
                {{ $projects->links() }}
            </div>
        @endif
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            // Inisialisasi DataTables
            $('#myTable').DataTable();

            // Konfirmasi penghapusan
            $(document).on('click', '.delete-btn', function(e) {
                e.preventDefault();
                var form = $(this).closest("form");

                // Tampilkan SweetAlert2 untuk konfirmasi penghapusan
                Swal.fire({
                    title: "Yakin data dihapus?",
                    text: "Anda tidak akan dapat mengembalikannya!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Ya, hapus!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Kirim form secara manual jika konfirmasi
                        form.submit();
                    }
                });
            });

            // Konfirmasi saat mengedit data (tanpa tombol cancel)
            $(document).on('click', '.edit-btn', function(e) {
                e.preventDefault();
                var link = $(this).attr("href");

                Swal.fire({
                    title: "Edit Project?",
                    text: "Apakah Anda yakin ingin mengedit project ini?",
                    icon: "warning",
                    showCancelButton: false, // Menghilangkan tombol cancel
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "Ya, edit!",
                    allowOutsideClick: false, // Mencegah menutup dialog dengan klik di luar
                    allowEscapeKey: false // Mencegah menutup dialog dengan tombol Esc
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = link;
                    }
                });
            });
        });
    </script>

</body>
</html>