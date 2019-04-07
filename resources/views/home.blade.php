@extends('layouts.user.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="panel panel-default sidebar-menu">
                <div class="panel-heading">
                    <h3 class="panel-title">Categories</h3>
                </div>

                <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked category-menu">
                        @foreach($categories as $val)
                        <li>
                            <a href="#">{{ $val->name }} <span class="badge pull-right"></span></a>
                            <ul>
                                @foreach($advertices as $key)
                                @if($key->cat_id == $val->id)
                                <li><a href="#">{{ $key->title}}</a>
                                </li>
                                @endif
                                @endforeach
                            </ul>
                        </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
        <div class="col-sm-9">
            @foreach($categories as $val)
            <div class="row">
                <div class="col-md-12">
                    <h4>{{ $val->name }}</h4>

                    @foreach($advertices as $key)
                    @if($key->cat_id == $val->id)
                    <div class="col-md-4">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="row">
                                    <label>Title</label>
                                    {{ $key->title}}
                                </div>
                                <div class="row">
                                    <label>Category</label>
                                    {{ $key->categories->name}}
                                </div>
                                <div class="row">
                                    <label>Discription</label>
                                    {{ $key->discription}}
                                </div>
                                <div class="row">
                                    <label>Name</label>
                                    {{ $key->user->name}}
                                </div>
                                <div class="row">
                                    <label>Email</label>
                                    {{ $key->user->email}}
                                </div>
                                <div class="row">
                                    <label>Phone Number</label>
                                    {{ $key->user->phone}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection