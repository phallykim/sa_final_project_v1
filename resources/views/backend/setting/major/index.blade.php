@extends('backend.layout.master')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Updater</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>

            <!-- Major List Section -->
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Major List</h3>
                    <a href="{{ url('/major/create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Create Major
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Requester</th>
                                <th>Type</th>
                                <th>Priority</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($majors as $key => $major)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $major->major_type }}</td>
                                    <td>{{ $major->description }}</td>
                                    <td>
                                        <span class="badge badge-{{ $major->status == 'Active' ? 'success' : 'secondary' }}">
                                            {{ $major->status }}
                                        </span>
                                    </td>
                                    <td class="d-flex">
                                        <a href="{{ url('/major/'.$major->id) }}" class="btn btn-info btn-sm mr-2">
                                            <i class="fas fa-eye"></i> View
                                        </a>
                                        <a href="{{ url('/major/'.$major->id.'/edit') }}" class="btn btn-warning btn-sm mr-2">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $major->id }})">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                        <form id="delete-form-{{ $major->id }}" action="{{ url('/major/'.$major->id) }}" method="POST" class="d-none">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

       
@endsection

@section('type_message')
    <script>
        $(function () {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });

            // Display session-based toasts
            @if(session('flash_message'))
                toastr.success('{{ session('flash_message') }}');
            @endif

            @if(session('info'))
                toastr.info('{{ session('info') }}');
            @endif

            @if(session('error'))
                toastr.error('{{ session('error') }}');
            @endif

            // Toast buttons
            $('.toastrDefaultSuccess').click(() => toastr.success('Operation successful!'));
            $('.toastrDefaultInfo').click(() => toastr.info('Here is some information.'));
            $('.toastrDefaultError').click(() => toastr.error('An error occurred.'));
            $('.toastrDefaultWarning').click(() => toastr.warning('Warning! Please check.'));

            // Confirm delete dialog
            window.confirmDelete = (id) => {
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'This action cannot be undone!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('delete-form-' + id).submit();
                    }
                });
            };
        });
    </script>
@endsection
