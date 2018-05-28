@extends('layouts.master')
@if(isset($product))
    @section('page_title', 'Edit Product')
@else
    @section('page_title', 'Create New Product')
@endif

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="glyphicon glyphicon-plus-sign"></i>
                            @if(isset($product))
                            Edit Product
                            @else
                            Create New Product
                            @endif
                        </h3>
                    </div>
                    <div class="panel-body">

                        @if(isset($product))

                        {!! Form::model($product, [
                            'method' => 'PUT',
                            'route' => ['product.update', $product->id],
                        ]) !!}

                        @else

                        {!! Form::open([
                            'method' => 'POST',
                            'route' => 'product.store',
                        ]) !!}

                        @endif

                        <div class="row">

                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">

                                <div class="row table editCompanyTableData">
                                    <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">Product title</div>
                                    <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7">
                                        {{ Form::text('title', null, ['autofocus' => 'autofocus', 'class' => 'form-control']) }}
                                    </div>
                                </div>
                                <div class="row table editCompanyTableData">
                                    <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">Short Description</div>
                                    <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7">
                                        {{ Form::textarea('short_desc', null, ['style' => 'border-radius:5px;max-height:10em;max-width:100%;', 'class' => 'form-control']) }}
                                    </div>
                                </div>
                                <div class="row table editCompanyTableData">
                                    <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">Long Description</div>
                                    <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7">
                                        {{ Form::textarea('long_desc', null, ['style' => 'border-radius:5px;max-height:10em;max-width:100%;', 'class' => 'form-control']) }}
                                    </div>
                                </div>
                                <div class="row table editCompanyTableData">
                                    <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">Supplier</div>
                                    <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7">
                                        {{ Form::text('supplier', null, ['class' => 'form-control']) }}
                                    </div>
                                </div>
                                <div class="row table editCompanyTableData">
                                    <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">SKU</div>
                                    <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7">
                                        {{ Form::text('sku', null, ['class' => 'form-control']) }}
                                    </div>
                                </div>
                                <div class="row table editCompanyTableData">
                                    <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">Tags</div>
                                    <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7">
                                        {{ Form::text('tags', null, ['class' => 'form-control']) }}
                                    </div>
                                </div>
                                <div class="row table editCompanyTableData">
                                    <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">Category</div>
                                    <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7">
                                        {{ Form::select('category', $categories) }}
                                    </div>
                                </div>
                                <div class="row table editCompanyTableData">
                                    <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">Sub-Category</div>
                                    <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7">
                                        <div class="form-group">
                                            <div class="input-group">
                                                 @foreach($subCategories as $subCat)
                                                <span>
                                                    {{ Form::checkbox('sub_category[]', $subCat->id, in_array($subCat->id, $selectedSubCats), ['class' => 'switchery']) }}
                                                </span>
                                                {{ Form::label('sub_category', $subCat->name) }}
                                                <br>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel-footer" style="margin-left: 2em; margin-right:2em;">
                    <span class="pull-right">
                        {{ Form::submit('submit', [
                            'class' => 'btn btn-sm btn-success',
                            'data-toggle' => 'tooltip',
                            'data-original-title' => 'Save changes',
                            'type' => 'submit'
                        ])  }}
                        {!! Form::close() !!}

                        <a href="{{ route('home') }}" class="btn btn-sm btn-primary" type="button"
                           data-toggle="tooltip"
                           data-original-title="Cancel">Cancel</a>
                        </span>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @stop