<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Certificate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        .btn-light-blue {
            background-color: #00b4d8;
            color: white;
        }
        .btn-light-blue:hover {
            background-color: #0096c7;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Data Certificate</h2>
        <a href="{{ route('certificates.create') }}" class="btn btn-light-blue mb-3">Create</a>
        
        <table class="table table-bordered table-striped" id="myTable">
            <thead class="table-light">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Issued By</th>
                    <th>Issued At</th>
                    <th>Description</th>
                    <th>File</th>
                    <th>Action</th>
                </tr>   
            </thead>
            <tbody>
                @foreach ($certificates as $certificate)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $certificate->name }}</td>
                    <td>{{ $certificate->issued_by }}</td>
                    <td>{{ $certificate->issued_at }}</td>
                    <td>{{ $certificate->description }}</td>
                    <td>
                        <a href="{{ Storage::url($certificate->file_path) }}" 
                           class="btn btn-light-blue btn-sm" 
                           target="_blank">View Certificate</a>
                    </td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Actions
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('certificates.edit', $certificate->id) }}" class="dropdown-item">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('certificates.show', $certificate->id) }}" class="dropdown-item">
                                        <i class="bi bi-eye"></i> Detail
                                    </a>
                                </li>
                                <li>
                                    <form action="{{ route('certificates.destroy', $certificate->id) }}" 
                                          method="POST" 
                                          class="delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="dropdown-item delete-btn">
                                            <i class="bi bi-trash"></i> Delete
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="//cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            // Initialize DataTable
            $('#myTable').DataTable({
                pageLength: 3,
                lengthChange: false,
                searching: true,
                info: true,
                dom: 'rt<"bottom"ip>',
                language: {
                    info: "Showing _START_ to _END_ of _TOTAL_ entries"
                }
            });

            // SweetAlert Delete Confirmation
            $(document).on('click', '.delete-btn', function(e) {
                e.preventDefault();
                var form = $(this).closest('form'); // Get the form

                Swal.fire({
                    title: "Are you sure you want to delete this certificate?",
                    text: "You won't be able to undo this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit(); // Submit the form on confirmation
                    }
                });
            });

            // SweetAlert Success Message
            @if (session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: '{{ session('success') }}',
                    confirmButtonText: 'OK'
                });
            @endif
        });
    </script>
</body>
</html>
