{{--<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/admin">
                                      
                                        {{ __('Main Page') }}
                                    </a>

                                    <a class="dropdown-item" href="/admin/all_products">
                                      
                                        {{ __('View Products') }}
                                    </a>
                                    <a class="dropdown-item" href="/admin/products/create">
                                      
                                        {{ __('Add New Products') }}
                                    </a>
                                    <a class="dropdown-item" href="/admin/categories/create">
                                      
                                        {{ __('Add New Category') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                    
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
--}}


<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Latest compiled and minified css-->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



    <link rel="stylesheet" type="text/css" href="{{asset('css/adminLayout/index.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/adminLayout/default.css')}}">
</head>

<body>

<div class="container-fluid display-table">
    <div class="row display-table-row box">
        <!-- side menu-->
        <div class="col-md-2 display-table-cell col-sm-1 hidden-xs valign-top box" id="side-menu">
            <div class="pull-left img">
                <div>
                    <h1 class="hidden-sm hidden-xs">
                        <a href="#"><img src="css/adminLayout/img_avatar.png" class="img-circle" class="img-responsive" alt="panda" width="70" height="70">
                        </a> Username
                    </h1>
                </div>

                <!--Side munu-->
                <div id="side-menu-list">
                    <ul>
                        <!--Dashboard-->
                        <li class="link active">
                            <a href="/admin"><span class="glyphicon glyphicon-th-large" aria-hidden="true">
                                </span><span class="hidden-sm hidden-xs"> Dashboard</span></a>
                        </li>

                        <!--Users List-->
                        <li>
                            <a href="/admin/user_list"><span class="glyphicon glyphicon-user" aria-hidden="true">
                                </span><span class="hidden-sm hidden-xs"> Users List</span></a>
                        </li>

                        <!--Category dropdown-->
                        <li class="link"><a href="#collapse-post" data-toggle="collapse" aria-controls="collapse-post">
                                <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                                <span class="hidden-sm hidden-xs">Category</span></a>
                            <ul class="collapse collapseable" id="collapse-post">
                                <li><a href="/admin/categories/create"><span class="glyphicon glyphicon-plus-sign"></span> Add Category</a></li>
                                <li><a href="category_list.html"><span class="glyphicon glyphicon-list-alt"></span> Category List</a></li>
                            </ul>
                        </li>

                        <!--Product dropdown-->
                        <li class="link"><a href="#collapse-products" data-toggle="collapse" aria-controls="collapse-products">
                                <span class="glyphicon glyphicon-gift" aria-hidden="true"></span>
                                <span class="hidden-sm hidden-xs">Product</span></a>
                            <ul class="collapse collapseable" id="collapse-products">
                                <li><a href="/admin/products/create"><span class="glyphicon glyphicon-plus-sign"></span> Add Product</a></li>
                                <li><a href="category_list.html"><span class="glyphicon glyphicon-list-alt"></span> Product List</a></li>
                            </ul>
                        </li>
                        <!--Order List-->

                        <li>
                            <a href="order_list.html"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true">
                                </span><span class="hidden-sm hidden-xs"> Order List</span></a>
                        </li>



                        <!--Mail Box-->
                        <li>
                            <a href="mail_box.html"><span class="glyphicon glyphicon-envelope" aria-hidden="true">
                                </span><span class="hidden-sm hidden-xs"> Mail Box</span></a>
                        </li>

                        <!--Admin Profile-->
                        <li>
                            <a href="admin_profile.html"><span class="glyphicon glyphicon-user" aria-hidden="true">
                                </span><span class="hidden-sm hidden-xs"> Admin Profile</span></a>
                        </li>

                        <!--Settings-->
                        <li id="app-settings">
                            <a href="settings.html"><span class="glyphicon glyphicon-wrench" aria-hidden="true">
                                </span><span class="hidden-sm hidden-xs"> Application Setting</span></a>
                        </li>

                    </ul>

                </div>
            </div>
        </div>

        <!--main content-->
        <div class="col-md-10 display-table-cell col-sm-11 valign-top box">
            @yield('content');

        </div>
    </div>

</div>

</div>
</div>


<script src="js/func.js"></script>
</body>
</html>
