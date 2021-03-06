<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{!! config('main.site_name'); !!}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/bootstrap-cerulean.min.css">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {!! config('main.site_name'); !!}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/home') }}">Home</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @ability('root','manage-admin')
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Admin <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        @ability('root','manage-roles')
                        <li><a href="{{ url('/admin/manage-roles') }}">Roles and Permissions</a></li>
                        @endability
                        @ability('root','manage-users')
                        <li><a href="{{ url('/admin/manage-users') }}">Users</a></li>
                        @endability
                    </ul>
                </li>
                @endability
            </ul>
        </div>
    </div>
</nav>

<!-- Handle error messages -->
@if (count($errors) > 0)
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <!-- Form Error List -->
                @foreach ($errors->all() as $error)
                    @if(substr($error,0,9) == '!success!')
                        <?php $error = substr($error,9) ?>
                        <div class="alert alert-dismissible alert-success">
                    @elseif(substr($error,0,9) == '!warning!')
                        <?php $error = substr($error,9) ?>
                        <div class="alert alert-dismissible alert-warning">
                    @elseif(substr($error,0,6) == '!info!')
                        <?php $error = substr($error,6) ?>
                        <div class="alert alert-dismissible alert-info">
                    @elseif(substr($error,0,7) == '!error!')
                        <?php $error = substr($error,7) ?>
                        <div class="alert alert-dismissible alert-danger">
                    @else
                        <div class="alert alert-dismissible alert-danger">
                    @endif
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        {{ $error }}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif

@yield('content')

        <!-- JavaScripts -->
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>
