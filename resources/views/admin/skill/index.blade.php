<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Skill</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Daftar Skill</h2>
        <a href="{{ route('skill.create') }}" class="btn btn-primary mb-3">Buat Skill Baru</a>
        
        <table class="table table-bordered table-striped" id="myTable">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Judul</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Aksi</th>
                </tr>   
            </thead>
            <tbody>
                @foreach ($skill as $row)
                <tr>
                    <td>{{ $row->title }}</td>
                    <td>{{ $row->description }}</td>
                    <td>
                        <a href="{{ route('skill.show', $row->id) }}" class="btn btn-info btn-sm detail-btn">Detail</a>
                        <a href="{{ route('skill.edit', $row->id) }}" class="btn btn-warning btn-sm edit-btn">Edit</a>

                        <!-- Formulir untuk penghapusan -->
                        <form action="{{ route('skill.destroy', $row->id) }}" method="POST" style="display:inline;" class="delete-form">
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

    <!-- Bootstrap JS, jQuery, DataTables, dan SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="//cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Script untuk SweetAlert2 dan DataTables -->
    <script type="text/javascript">
        $(document).ready(function() {
            // Inisialisasi DataTables
            $('#myTable').DataTable();

            // Menampilkan pesan sukses dari session
            @if (session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: '{{ session('success') }}',
                    confirmButtonText: 'OK'
                });
            @endif

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

            // Konfirmasi saat mengedit data
            $(document).on('click', '.edit-btn', function(e) {
                e.preventDefault();
                var link = $(this).attr("href");

                Swal.fire({
                    title: "Edit Skill?",
                    text: "Apakah Anda yakin ingin mengedit skill ini?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Ya, edit!"
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
