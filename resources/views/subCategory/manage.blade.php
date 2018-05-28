@extends('layouts.master')
@if(isset($subCategory))
    @section('page_title', 'Edit Sub-Category')
@else
    @section('page_title', 'Create New Sub-Category')
@endif

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="glyphicon glyphicon-plus-sign"></i>
                            @if(isset($subCategory))
                            Edit Sub-Category
                            @else
                            Create New Sub-Category
                            @endif
                        </h3>
                    </div>
                    <div class="panel-body">

                        @if(isset($subCategory))

                        {!! Form::model($subCategory, [
                            'method' => 'PUT',
                            'route' => ['product-subcategories.update', $subCategory->id],
                        ]) !!}

                        @else

                        {!! Form::open([
                            'method' => 'POST',
                            'route' => 'product-subcategories.store',
                        ]) !!}

                        @endif

                        <div class="row">

                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">

                                <div class="row table editCompanyTableData">
                                    <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">Sub-Category name</div>
                                    <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7">
                                        {{ Form::text('name', null, ['autofocus' => 'autofocus', 'class' => 'form-control']) }}
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

                        <a href="{{ route('product-subcategories.index') }}" class="btn btn-sm btn-primary" type="button"
                           data-toggle="tooltip"
                           data-original-title="Cancel">Cancel</a>
                        </span>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @stop