<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Advertising Group</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ url('/login') }}">Login</a>
            <a href="{{ url('/register') }}">Register</a>
            @endif
        </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Advertising Group
            </div>

            <div class="links">
                <a href="#propertice">Properties</a>
                <a href="#vehicals">Vehicals</a>
                <a href="#electronics">Electronics</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-md-9 col-md-offset-2">
            @foreach($categories as $val)
            <div class="row">
                <div id="#{{ strtolower($val->name) }}" class="col-md-12">
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
</body>

</html>