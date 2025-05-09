@extends('backend.layout.master')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Create Update</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Create update</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-plus-circle"></i> Add New update</h3>
        </div>

        <div class="card-body">
            <form action="{{ url('/major') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Requester -->
                <div class="form-group">
                    <label for="requester_type">Requester <span class="text-danger">*</span></label>
                    <input 
                        type="text" 
                        name="reqester_type" 
                        id="requester_type" 
                        class="form-control @error('reqester_type') is-invalid @enderror" 
                        placeholder="Enter requester type" 
                        value="{{ old('reqester_type') }}"
                    >
                    @error('reqester_type')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Type -->
                <div class="form-group">
                    <label for="description">Type <span class="text-danger">*</span></label>
                    <input 
                        type="text" 
                        name="description" 
                        id="description" 
                        class="form-control @error('description') is-invalid @enderror" 
                        placeholder="Enter description" 
                        value="{{ old('description') }}"
                    >
                    @error('description')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- File Input -->
                <div class="form-group">
                    <label for="file_input">File Input</label>
                    <div class="custom-file">
                        <input 
                            type="file" 
                            class="custom-file-input @error('file_input') is-invalid @enderror" 
                            id="file_input" 
                            name="file_input"
                        >
                        <label class="custom-file-label" for="file_input">Choose file</label>
                    </div>
                    @error('file_input')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Status -->
                <div class="form-group">
                    <label for="status">Status</label>
                    <select 
                        name="status" 
                        id="status" 
                        class="form-control @error('status') is-invalid @enderror"
                    >
                        <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Inactive</option>
                    </select>
                    @error('status')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Save
                </button>
            </form>
        </div>
    </div>
@endsection
