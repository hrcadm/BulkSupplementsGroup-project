@extends('layouts.master')
@section('page_title', 'Companies')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Companies
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered {{ count($companies) > 0 ? 'datatable' : '' }}" id="companyIndexTable" class="hover">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Address 1</th>
                    <th>Address 2</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Country</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($companies as $company)
                    <tr>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->address_one }}</td>
                        <td>{{ $company->address_two }}</td>
                        <td>{{ $company->city }}</td>
                        <td>{{ $company->state }}</td>
                        <td>{{ $company->country }}</td>
                        <td>
                            <a href="{{ route('company.show', $company->id) }}" class="btn btn-success btn-xs">Details</a>
                            <a href="{{ route('company.edit', $company->id) }}" class="btn btn-warning btn-xs">Edit</a>
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
            $('#companyIndexTable').DataTable();
        });
    </script>
@stop