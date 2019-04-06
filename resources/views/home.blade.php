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
                        <li>
                            <a href="shop-category.html">Men <span class="badge pull-right">42</span></a>
                            <ul>
                                <li><a href="shop-category.html">T-shirts</a>
                                </li>
                                <li><a href="shop-category.html">Shirts</a>
                                </li>
                                <li><a href="shop-category.html">Pants</a>
                                </li>
                                <li><a href="shop-category.html">Accessories</a>
                                </li>
                            </ul>
                        </li>
                        <li class="active">
                            <a href="shop-category.html">Ladies <span class="badge pull-right">123</span></a>
                            <ul>
                                <li><a href="shop-category.html">T-shirts</a>
                                </li>
                                <li><a href="shop-category.html">Skirts</a>
                                </li>
                                <li><a href="shop-category.html">Pants</a>
                                </li>
                                <li><a href="shop-category.html">Accessories</a>
                                </li>
                            </ul>
                        </li>

                    </ul>

                </div>
            </div>

            <div class="panel panel-default sidebar-menu">

                <div class="panel-heading">
                    <h3 class="panel-title">Brands</h3>
                    <a class="btn btn-xs btn-danger pull-right" href="#"><i class="fa fa-times-circle"></i> <span class="hidden-sm">Clear</span></a>
                </div>

                <div class="panel-body">
                    <form>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">Armani (10)
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">Versace (12)
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">Carlo Bruni (15)
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">Jack Honey (14)
                                </label>
                            </div>
                        </div>

                        <button class="btn btn-default btn-sm btn-template-main"><i class="fa fa-pencil"></i> Apply</button>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection