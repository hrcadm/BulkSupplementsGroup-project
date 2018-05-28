@extends('layouts.master')
@section('page_title', 'Product Sub-Categories')

@section('content')

<div class="panel panel-default">
        <div class="panel-heading">
            Product Sub-Categories
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered {{ count($subCategories) > 0 ? 'datatable' : '' }}" id="subCategoriesIndexTable" class="hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($subCategories as $subCategory)
                    <tr>
                        <td>{{ $subCategory->id }}</td>
                        <td>{{ $subCategory->name }}</td>
                        <td>
                            {!! Form::open([
                                'method' => 'DELETE',
                                'route' => ['product-subcategories.destroy', $subCategory->id],
                                'style' => 'display:inline'
                            ]) !!}
                                {{ Form::submit('delete', [
                                'class' => 'btn btn-danger btn-xs',
                                'type' => 'submit',
                            ])  }}
                            {!! Form::close() !!}
                            <a href="{{ route('product-subcategories.edit', $subCategory->id) }}" class="btn btn-success btn-xs">Edit</a>
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
            $('#subCategoriesIndexTable').DataTable();
        });
    </script>
@stop