@extends('layouts.master')
@section('page_title', 'View company')

@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="glyphicon glyphicon-briefcase"></i>  {{ $company->name }}</h3>
                </div>

                <div class="panel-body">

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

                        <div class=" col-md-9 col-lg-9 col-sm-9 col-xs-9">
                            <div class="row table-responsive">
                                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">Address 1</div>
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7 test">
                                    {{ $company->address_one }}
                                </div>
                            </div>

                            <div class="row table-responsive">
                                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">Address 2</div>
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7 test">
                                    {{ $company->address_two }}
                                </div>
                            </div>

                            <div class="row table-responsive">
                                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">City</div>
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7 test">
                                    {{ $company->city }}
                                </div>
                            </div>

                            <div class="row table-responsive">
                                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">State</div>
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7 test">
                                    {{ $company->state }}
                                </div>
                            </div>

                            <div class="row table-responsive">
                                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">Postcode</div>
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7 test">
                                    {{ $company->post_code }}
                                </div>
                            </div>

                            <div class="row table-responsive">
                                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">Country</div>
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7 test">
                                    {{ $company->country }}
                                </div>
                            </div>

                            <div class="row table-responsive">
                                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">Phone</div>
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7 test">
                                    {{ $company->phone }}
                                </div>
                            </div>

                            <div class="row table-responsive">
                                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">Fax</div>
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7 test">
                                    {{ $company->fax }}
                                </div>
                            </div>

                            <div class="row table-responsive">
                                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">Website</div>
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7 test">
                                    {{ $company->website }}
                                </div>
                            </div>

                            <div class="row table-responsive">
                                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">E-mail</div>
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7 test">
                                    {{ $company->email }}
                                </div>
                            </div>

                            <div class="row table-responsive">
                                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">Registered Since</div>
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7">
                                    {{ $company->created_at }}
                                </div>
                            </div>
                            <hr>
                            <div class="row table-responsive">
                                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">Users related to the company</div>
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-7">
                                    <ul style="list-style-type: none;padding:0;">
                                        @foreach($company->user as $user)
                                            <li>{{ $user->username }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer" style="margin-left: 2em; margin-right:2em;">
                    <a href="{{ route('company.index') }}" class="btn btn-sm btn-primary" type="button"
                       data-toggle="tooltip"
                       data-original-title="Go back"><i class="glyphicon glyphicon-arrow-left"></i></a>
                    <span class="pull-right">
                            <a href="{{ route('company.edit', $company->id) }}" class="btn btn-sm btn-warning" type="button"
                               data-toggle="tooltip"
                               data-original-title="Edit this company"><i class="glyphicon glyphicon-edit"></i></a>
                    </span>
                </div>
            </div>
        </div>
    </div>
@stop