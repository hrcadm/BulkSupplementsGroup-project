@extends('layouts.master')
@if(isset($company))
    @section('page_title', 'Edit Company')
@else
    @section('page_title', 'Create new company')
@endif

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="glyphicon glyphicon-user"></i>
                        @if(isset($company))
                        Edit Company
                        @else
                        Create New Company
                        @endif
                    </h3>
                </div>
                <div class="panel-body">

                    @if(isset($company))

                    {!! Form::model($company, [
                        'method' => 'PUT',
                        'route' => ['company.update', $company->id],
                        ])
                    !!}

                    @else

                    {!! Form::open([
                        'method' => 'POST',
                        'route' => 'company.store',
                    ]) !!}

                    @endif

                    <div class="row" style="text-align: center;margin-bottom: 2em;">
                        <div class="hidden-md hidden-lg col-xs-12 col-sm-12">
                            <img class="img-circle"
                                 src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100"
                                 alt="User Pic">
                        </div>
                    </div>

                    <div class="row">
                        <div class="hidden-xs hidden-sm col-md-3 col-lg-3" style="text-align: center;margin-top:2em;">
                            <img class="img-circle"
                                 src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100"
                                 alt="User Pic">
                        </div>

                        <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">

                            <div class="row table editCompanyTableData">
                                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">Name</div>
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7">
                                    {{ Form::text('name', null, ['autofocus' => 'autofocus', 'class' => 'form-control']) }}
                                </div>
                            </div>
                            <div class="row table editCompanyTableData">
                                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">Address 1</div>
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7">
                                    {{ Form::text('address_one', null, ['class' => 'form-control']) }}
                                </div>
                            </div>
                            <div class="row table editCompanyTableData">
                                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">Address 2</div>
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7">
                                    {{ Form::text('address_two', null, ['class' => 'form-control']) }}
                                </div>
                            </div>
                            <div class="row table editCompanyTableData">
                                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">City</div>
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7">
                                    {{ Form::text('city', null, ['class' => 'form-control']) }}
                                </div>
                            </div>
                            <div class="row table editCompanyTableData">
                                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">State</div>
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7">
                                    {{ Form::text('state', null, ['class' => 'form-control']) }}
                                </div>
                            </div>
                            <div class="row table editCompanyTableData">
                                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">Postcode</div>
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7">
                                    {{ Form::text('post_code', null, ['class' => 'form-control']) }}
                                </div>
                            </div>
                            <div class="row table editCompanyTableData">
                                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">Country</div>
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7">
                                    {{ Form::text('country', null, ['class' => 'form-control']) }}
                                </div>
                            </div>
                            <div class="row table editCompanyTableData">
                                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">Phone</div>
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7">
                                    {{ Form::text('phone', null, ['class' => 'form-control']) }}
                                </div>
                            </div>
                            <div class="row table editCompanyTableData">
                                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">Fax</div>
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7">
                                    {{ Form::text('fax', null, ['class' => 'form-control']) }}
                                </div>
                            </div>
                            <div class="row table editCompanyTableData">
                                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">Website</div>
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7">
                                    {{ Form::text('website', null, ['class' => 'form-control']) }}
                                </div>
                            </div>
                            <div class="row table editCompanyTableData">
                                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">E-mail</div>
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7">
                                    {{ Form::email('email', null, ['class' => 'form-control']) }}
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