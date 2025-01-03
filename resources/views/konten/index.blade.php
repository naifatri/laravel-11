<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Konten</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Daftar Konten</h1>
        <a href="{{ route('konten.create') }}" class="btn btn-primary">Tambah Konten</a>
    </div>

    <!-- Pesan Sukses -->
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <table class="table table-striped table-bordered" id="myTable">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Konten</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($konten as $k)
            <tr>
                <td>{{ $k->id }}</td>
                <td>{{ $k->konten }}</td>
                <td>{{ $k->description }}</td>
                <td class="d-flex">
                    <a href="{{ route('konten.show', $k->id) }}" class="btn btn-info btn-sm me-2">Lihat</a>
                    <a href="{{ route('konten.edit', $k->id) }}" class="btn btn-warning btn-sm me-2">Edit</a>
                    <form action="{{ route('konten.destroy', $k->id) }}" method="POST" class="delete-form">
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

<!-- Script untuk jQuery, DataTables dan SweetAlert2 -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
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
                    title: "Edit Konten?",
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
