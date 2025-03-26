@extends('admin.layouts.master')

@section('content')
    <form action="{{ route('admin.tasks.store') }}" method="POST" enctype="multipart/form-data" class="advanced-form myForm"
        autocomplete="off" data-parsley-validate novalidate>
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Create New Task
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page body -->
        <div class="page-body">
            <div class="container-xl">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul class="mb-0">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-12 mb-4">
                                        <div class="form-group">
                                            <label class="form-label">Task Name</label>
                                            <input type="text" class="form-control" name="name" id="name"
                                                value="{{ old('name') }}" placeholder="Task Name" required>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-4">
                                        <div class="form-group">
                                            <label class="form-label">Priority</label>
                                            <input type="number" class="form-control" name="priority" id="priority"
                                                value="{{ old('priority') }}" placeholder="Priority" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-flex">
                                <button type="submit" class="btn btn-primary">Create New Task</button>
                                <a href="{{ route('admin.tasks.index') }}"
                                    class="btn btn-link link-secondary ms-auto">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
