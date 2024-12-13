<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Management</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="card-title">Contact Management</h2>
                    <a href="{{ route('admin.dashboard.contacts.index') }}" class="btn btn-primary">Create Contact</a>
                </div>

                <table class="table table-bordered table-striped" id="contactsTable">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contacts as $index => $contact)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->subject }}</td>
                            <td>{{ Str::limit($contact->message, 50) }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.dashboard.contacts.edit', $contact->id) }}" 
                                       class="btn btn-warning btn-sm">Edit</a>
                                    <a href="{{ route('admin.dashboard.contacts.show', $contact->id) }}" 
                                       class="btn btn-info btn-sm">View</a>
                                    <form action="{{ route('admin.dashboard.contacts.destroy', $contact->id) }}" 
                                          method="POST" 
                                          style="display:inline;" 
                                          id="deleteForm{{ $contact->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" 
                                                class="btn btn-danger btn-sm"
                                                onclick="confirmDelete({{ $contact->id }})">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Pagination -->
                <div class="d-flex justify-content-between align-items-center mt-4">
                    <div class="text-muted">
                        Showing {{ $contacts->firstItem() }} to {{ $contacts->lastItem() }} 
                        of {{ $contacts->total() }} entries
                    </div>
                    <nav aria-label="Page navigation">
                        <ul class="pagination mb-0">
                            <!-- Previous Page -->
                            <li class="page-item {{ $contacts->onFirstPage() ? 'disabled' : '' }}">
                                <a class="page-link" href="{{ $contacts->previousPageUrl() }}" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            
                            <!-- Page Numbers -->
                            @foreach($contacts->getUrlRange(1, $contacts->lastPage()) as $page => $url)
                            <li class="page-item {{ $page == $contacts->currentPage() ? 'active' : '' }}">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                            @endforeach
                            
                            <!-- Next Page -->
                            <li class="page-item {{ !$contacts->hasMorePages() ? 'disabled' : '' }}">
                                <a class="page-link" href="{{ $contacts->nextPageUrl() }}" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="//cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            // Initialize DataTables
            $('#contactsTable').DataTable({
                "paging": false,  // Disable built-in paging
                "searching": true, // Enable built-in searching
                "info": false     // Disable "Showing X to Y of Z entries" info
            });

            // Show success message if exists
            @if (session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: '{{ session('success') }}',
                    confirmButtonText: 'OK'
                });
            @endif
        });

        // Delete confirmation
        function confirmDelete(contactId) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('deleteForm' + contactId).submit();
                }
            });
        }
    </script>
</body>
</html>