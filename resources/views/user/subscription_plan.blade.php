@extends('layouts.user.app')

@section('content')
<section class="bar background-white no-mb" id="packages">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <div class="heading text-center">
                    <h2>Packages we offer</h2>
                </div>

                <p class="lead">Select a Subscription plan to post your adverticement after finish your free trial period.</p>

                <div class="row packages">
                    @foreach($subs as $pro)
                    @if($pro->title == 'Standard')
                    <div class="col-md-4">
                        <div class="best-value">
                            <div class="package ">
                                <div class="package-header">
                                    <h5>{{ $pro->title }}</h5>
                                </div>
                                <div class="meta-text">
                                    Best Value
                                </div>
                                <div class="price">
                                    <div class="price-container">
                                        <h4><span class="currency">LKR</span>{{ $pro->price}}</h4>
                                        <span class="period">/ {{ $pro->time_duration}}min </span>
                                    </div>
                                </div>
                                <ul>
                                    <li><i class="fa fa-check"></i></li>
                                    <li><i class="fa fa-check"></i>{{ $pro->discription }}</li>
                                    <li><i class="fa fa-times"></i></li>
                                </ul>
                                <a href="{{ route('user.subscribe',['sub_id'=>$pro->id]) }}" class="btn btn-template-main">

                                    Select </a>
                            </div>
                        </div>
                    </div>
                    @elseif($pro->title != 'Free')
                    <div class="col-md-4">
                        <div class="package ">
                            <div class="package-header">
                                <h5>{{ $pro->title }}</h5>
                            </div>
                            <div class="price">
                                <div class="price-container">
                                    <h4><span class="currency">LKR</span>{{ $pro->price}}</h4>
                                    <span class="period">/ {{ $pro->time_duration}}min </span>
                                </div>
                            </div>
                            <ul>
                                <li><i class="fa fa-check"></i></li>
                                <li><i class="fa fa-check"></i>{{ $pro->discription }}</li>
                                <li><i class="fa fa-times"></i></li>
                            </ul>
                            <a href="{{ route('user.subscribe',['sub_id'=>$pro->id])  }}" class="btn btn-template-main">

                                Select </a>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    <!-- <div class="col-md-4">
                        <div class="best-value">
                            <div class="package">
                                <div class="package-header">
                                    <h5>Standard</h5>
                                    <div class="meta-text">
                                        Best Value
                                    </div>
                                </div>
                                <div class="price">
                                    <h4><span class="currency">LKR</span>100</h4>
                                    <span class="period">/ 10min</span>
                                </div>
                                <ul>
                                    <li><i class="fa fa-check"></i></li>
                                    <li><i class="fa fa-check"></i>100GB Storage</li>
                                    <li><i class="fa fa-check"></i></li>
                                </ul>
                                <a href="#" class="btn btn-template-main">

                                    Select </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="package ">
                            <div class="package-header light-gray">
                                <h5>Premium</h5>
                            </div>
                            <div class="price">
                                <div class="price-container">
                                    <h4><span class="currency">$</span>53 </h4>
                                    <span class="period">/ month</span>
                                </div>
                            </div>
                            <ul>
                                <li><i class="fa fa-check"></i>100GB Storage</li>
                                <li><i class="fa fa-check"></i>Own config file</li>
                                <li><i class="fa fa-times"></i>Sharing Tools</li>
                                <li><i class="fa fa-times"></i>Auto Backup</li>
                                <li><i class="fa fa-times"></i>Extended Security</li>
                            </ul>
                            <a href="#" class="btn btn-template-main">

                                Select </a>
                        </div>
                    </div> -->
                </div>

            </div>
        </div>
        <!-- <div class="row">
            <a class="offset-col-md-12" href="{{ url('home')}}">Skip Now</a>
        </div> -->
    </div>
</section>
@endsection