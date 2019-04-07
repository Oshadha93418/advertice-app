@extends('layouts.admin.app')
@section('content')
<section>
    <div class="container">
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
                                <li><a href="{{route('adverticeList')}}">Adverticements</a>
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
            <div class="panel panel-default sidebar-menu">
                <div class="panel-heading">
                    Adverticements List
                </div>

                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="col-md-2">Title</th>
                                <th class="col-md-3">Description</th>
                                <th class="col-md-3">Time Duration</th>
                                <th class="col-md-2">Price</th>
                                <th class="col-md-2">Created Time</th>
                                <th class="col-md-2">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($subPlans as $value)
                            <tr>
                                <td>{{ $value->title }}</td>
                                <td>{{ $value->discription }}</td>
                                <td>{{ $value->time_duration }}</td>
                                <td>{{ $value->price }}</td>
                                <td>{{ $value->created_at}}</td>
                                <td> <button class="btn btn-primary round">edit</button><button class="btn btn-danger round">delete</button> </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection