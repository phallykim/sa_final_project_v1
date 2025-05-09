@extends('backend.layout.master')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Form</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Major Form</h3>
        </div>
        <div>
            <form action="{{ url('/major/'.$majors->id) }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="card-body">
                    <div class="form-group">
                        <label>Major type <code class="text-danger">*</code></label>
                        <input type="text" name="major_type" class="form-control" placeholder="Major type" value="{{ old('major_type', $majors->major_type) }}">
                        <small class="text-danger">
                            @error('major_type') {{ $message }} @enderror
                        </small>
                    </div>

                    <div class="form-group">
                        <label>Major Description <code class="text-danger">*</code></label>
                        <input type="text" name="description" class="form-control" placeholder="Major Description" value="{{ old('description', $majors->description) }}">
                        <small class="text-danger">
                            @error('description') {{ $message }} @enderror
                        </small>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select class="custom-select form-control-border" name="status">
                            <option value="1" {{ $majors->status == 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ $majors->status == 0 ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Update
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
