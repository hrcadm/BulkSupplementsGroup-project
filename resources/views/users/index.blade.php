@extends('layouts.master')
@section('page_title', 'Customers')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        Customers
    </div>

    <div class="panel-body table-responsive">
        <table class="table table-bordered {{ count($users) > 0 ? 'datatable' : '' }}" id="customersTable" class="hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>E-mail</th>
                <th>Membership</th>
                <th>Company</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->email }}</td>
                    @if($user->membership == NULL)
                        <td></td>
                    @else
                    <td>{{ $user->membership->name }}</td>
                    @endif
                    @if($user->company == NULL)
                        <td></td>
                    @else
                    <td>{{ $user->company->name }}</td>
                    @endif
                    <td>
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-success btn-xs">Details</a>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-xs">Edit</a>
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
            $('#customersTable').DataTable();
        });
    </script>
@stop