@extends('layouts.master')
@section('page_title', 'Edit your profile')

@section('content')

<style>
    .editUserTableData {
        padding-bottom: 0.5em;
        padding-top: 0.5em;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="glyphicon glyphicon-user"></i> {{ $myProfile->first_name }} {{ $myProfile->last_name }}</h3>
                </div>
                <div class="panel-body">

                    {!! Form::open([
                            'method' => 'PUT',
                            'route' => ['users.update', $myProfile->id],
                     ]) !!}

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

                            <div class="row table editUserTableData">
                                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">Username</div>
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7">
                                    {{ Form::text('username', $myProfile->username, ['autofocus' => 'autofocus', 'style' => 'width:100%;border-radius:5px;']) }}
                                </div>
                            </div>
                            <div class="row table editUserTableData">
                                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">First Name</div>
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7">
                                    {{ Form::text('first_name', $myProfile->first_name, ['style' => 'width:100%;border-radius:5px;']) }}
                                </div>
                            </div>
                            <div class="row table editUserTableData">
                                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">Last Name</div>
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7">
                                    {{ Form::text('last_name', $myProfile->last_name, ['style' => 'width:100%;border-radius:5px;']) }}
                                </div>
                            </div>
                            <div class="row table editUserTableData">
                                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">Suffix</div>
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7">
                                    {{ Form::text('suffix', $myProfile->suffix, ['style' => 'width:100%;border-radius:5px;']) }}
                                </div>
                            </div>
                            <div class="row table editUserTableData">
                                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">E-mail</div>
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7">
                                    {{ Form::email('email', $myProfile->email, ['style' => 'width:100%;border-radius:5px;']) }}
                                </div>
                            </div>
                            <div class="row table editUserTableData">
                                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">Phone</div>
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7">
                                    {{ Form::text('phone', $myProfile->phone, ['style' => 'width:100%;border-radius:5px;']) }}
                                </div>
                            </div>
                            <div class="row table editUserTableData">
                                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">Mobile</div>
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7">
                                    {{ Form::text('mobile', $myProfile->mobile, ['style' => 'width:100%;border-radius:5px;']) }}
                                </div>
                            </div>
                            <div class="row table editUserTableData">
                                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">Fax</div>
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7">
                                    {{ Form::text('fax', $myProfile->fax, ['style' => 'width:100%;border-radius:5px;']) }}
                                </div>
                            </div>
                            <div class="row table editUserTableData">
                                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">Membership</div>
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7">
                                    {{ Form::select('membership', $memberships, ['style' => 'width:100%;border-radius:5px;']) }}
                                </div>
                            </div>
                            <div class="row table editUserTableData">
                                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">Company</div>
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7">
                                    {{ Form::select('company', $companies, ['style' => 'width:100%;border-radius:5px;']) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel-footer" style="margin-left: 2em; margin-right:2em;">
                    <span class="pull-right">
                        {{ Form::submit('save', ['class' => 'btn btn-sm btn-success', 'data-toggle' => 'tooltip', 'data-original-title' => 'Save changes'])  }}
                        {!! Form::close() !!}
                        <a href="{{ Route('home') }}" class="btn btn-sm btn-primary" type="button"
                           data-toggle="tooltip"
                           data-original-title="Cancel changes">Cancel</a>
                        </span>
                </div>

            </div>
        </div>
    </div>
</div>

@stop

@section('javascripts')
    <script>
        $('[data-toggle="tooltip"]').tooltip();
    </script>
@stop