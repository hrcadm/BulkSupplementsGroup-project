@extends('layouts.master')
@section('page_title', 'Product Categories')

@section('content')

<div class="panel panel-default">
        <div class="panel-heading">
            Product Categories
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered {{ count($categories) > 0 ? 'datatable' : '' }}" id="categoriesIndexTable" class="hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            {!! Form::open([
                                'method' => 'DELETE',
                                'route' => ['product-categories.destroy', $category->id],
                                'style' => 'display:inline'
                            ]) !!}
                                {{ Form::submit('delete', [
                                'class' => 'btn btn-danger btn-xs',
                                'type' => 'submit',
                            ])  }}
                            {!! Form::close() !!}
                            <a href="{{ route('product-categories.edit', $category->id) }}" class="btn btn-success btn-xs">Edit</a>
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
            $('#categoriesIndexTable').DataTable();
        });
    </script>
@stop