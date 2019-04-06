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

                    <div class="col-md-4">
                        <div class="package ">
                            <div class="package-header light-gray">
                                <h5>Basic</h5>
                            </div>
                            <div class="price">
                                <div class="price-container">
                                    <h4><span class="currency">$</span>7</h4>
                                    <span class="period">/ month </span>
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
                    </div>

                    <div class="col-md-4">
                        <div class="best-value">
                            <div class="package">
                                <div class="package-header">
                                    <h5>Premium</h5>
                                    <div class="meta-text">
                                        Best Value
                                    </div>
                                </div>
                                <div class="price">
                                    <h4><span class="currency">$</span>53</h4>
                                    <span class="period">/ month</span>
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
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="package ">
                            <div class="package-header light-gray">
                                <h5>Standard</h5>
                            </div>
                            <div class="price">
                                <div class="price-container">
                                    <h4><span class="currency">$</span>21 </h4>
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
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection