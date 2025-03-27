@extends('admin.layouts.master')
@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <h2 class="page-title">
                        Sort Tasks
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-body">
                    <ul id="sortable">
                        @foreach ($tasks as $task)
                            <li class="ui-state-default" id="{{$task->id}}"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>{{ $task->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('styles')
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">
    <style>
        #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
        #sortable li { margin: 0 3px 5px 3px; padding: 1.5em; padding-left: 1.5em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
        #sortable li span { position: absolute; margin-left: -1.3em; }
    </style>
@endpush
@push('scripts')
    <script>
        $('#sortable').sortable({
            axis: 'y',
            update: function (event, ui) {
                var sortedIds = $(this).sortable('toArray');

                $.ajax({
                    url: "{{route('admin.task.makeSorting')}}",
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        sortedIds: sortedIds
                    },
                    success: function() {
                    }
                });
            }
        });
    </script>
@endpush
