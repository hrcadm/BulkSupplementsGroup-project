@extends('layouts.master')
@section('page_title', 'Products')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Products
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered {{ count($products) > 0 ? 'datatable' : '' }}" id="productIndexTable" class="hover">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Supplier</th>
                    <th>SKU</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->short_desc }}</td>
                        <td>{{ $product->supplier }}</td>
                        <td>{{ $product->sku }}</td>
                        <td>
                            <a href="{{ route('product.show', $product->id) }}" class="btn btn-success btn-xs">Details</a>
                            <a href="{{ route('product.edit', $product->id) }}" class="btn btn-warning btn-xs">Edit</a>
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
            $('#productIndexTable').DataTable();
        });
    </script>
@stop