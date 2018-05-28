@extends('layouts.master')
@section('page_title', 'View Product')

@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="glyphicon glyphicon-briefcase"></i> Product Information</h3>
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
                    <div class=" col-md-7 col-lg-7 col-sm-7 col-xs-7">
                        <div class="row table-responsive">
                            <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">Title</div>
                            <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7 test">
                                {{ $product->title }}
                            </div>
                        </div>

                        <div class="row table-responsive">
                            <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">Short Description</div>
                            <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7 test">
                                {{ $product->short_desc }}
                            </div>
                        </div>

                        <div class="row table-responsive">
                            <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">Long Description</div>
                            <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7 test">
                                {{ $product->long_desc }}
                            </div>
                        </div>

                        <div class="row table-responsive">
                            <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">Supplier</div>
                            <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7 test">
                                {{ $product->supplier }}
                            </div>
                        </div>

                        <div class="row table-responsive">
                            <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">SKU</div>
                            <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7 test">
                                {{ $product->sku }}
                            </div>
                        </div>

                        <div class="row table-responsive">
                            <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">Tags</div>
                            <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7 test">
                                {{ $product->tags }}
                            </div>
                        </div>
                        <div class="row table-responsive">
                            <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">Category</div>
                            <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7 test">
                                @foreach($product->category as $cat)
                                 {{ $cat->name }}
                                 @endforeach
                            </div>
                        </div>
                        <div class="row table-responsive">
                            <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">Sub-Category</div>
                            <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7 test">
                                @foreach($product->subCategory as $subCat)
                                    <li>{{ $subCat->name }}</li>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                </div>
            </div>
            <div class="panel-footer" style="margin-left: 2em; margin-right:2em;">
                <a href="{{ route('product.index') }}" class="btn btn-sm btn-primary" type="button"
                   data-toggle="tooltip"
                   data-original-title="Go back"><i class="glyphicon glyphicon-arrow-left"></i></a>
                <span class="pull-right">
                            <a href="{{ route('product.edit', $product->id) }}" class="btn btn-sm btn-warning" type="button"
                               data-toggle="tooltip"
                               data-original-title="Edit this user"><i class="glyphicon glyphicon-edit"></i></a>
                        </span>
            </div>
        </div>
    </div>
</div>

@stop