@extends('layouts.admin.app')
@section('content')
<div class="container ">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="row">
        <div class="col-sm-3">
            <div class="panel panel-default sidebar-menu">
                <div class="panel-heading">
                    Admin panel
                </div>

                <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked category-menu">
                        <li class="active">
                            <a href="">Add</a>
                            <ul>
                                <li><a href="">Advertice Categories</a>
                                </li>
                                <li><a href="">Subscription Plans</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="">View</a>
                            <ul>
                                <li><a href="{{route('adverticsList')}}">Adverticements</a>
                                </li>
                                <li><a href="{{route('categoryList')}}">Advertice Categories</a>
                                </li>
                                <li><a href="{{route('subscriptionList')}}">Subscription Plans</a>
                                </li>
                                <li><a href="{{route('paymentList')}}">Payments</a>
                                </li>
                                <li><a href="{{route('usersList')}}">Users</a>
                                </li>
                            </ul>
                        </li>

                    </ul>

                </div>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="row">
                <div class="col-md-4">
                    <div class="panel">
                        <div class="panel-heading">Total Adverticements</div>

                        <div class="panel-body">

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel">
                        <div class="panel-heading">Total Users</div>

                        <div class="panel-body">

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel">
                        <div class="panel-heading">Total payments</div>

                        <div class="panel-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection