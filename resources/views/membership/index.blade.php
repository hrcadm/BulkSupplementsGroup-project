@extends('layouts.master')
@section('page_title', 'Memberships')

@section('content')

<div class="panel panel-default">
        <div class="panel-heading">
            Memberships
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered {{ count($memberships) > 0 ? 'datatable' : '' }}" id="membershipsIndexTable" class="hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($memberships as $membership)
                    <tr>
                        <td>{{ $membership->id }}</td>
                        <td>{{ $membership->name }}</td>
                        <td>
                            <a href="#" class="btn btn-success btn-xs" disabled>Details</a>
                            <a href="{{ route('membership.edit', $membership->id) }}" class="btn btn-warning btn-xs">Edit</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop

@section('javascripts')

    <script type="text/javascript">
        $(document).ready(function() {
            $('#membershipsIndexTable').DataTable();
        });
    </script>
@stop