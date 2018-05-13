<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="{{ asset('css/adminLayout/index1.css') }}" rel="stylesheet">
</head>
<body>


<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Welcome To Lap4Geeks
        </div>

        <div class="links">
            <a href="https://laravel.com/docs">Documentation</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
        </div>
    </div>
</div>

<nav class="navbar navbar-default">
      <div class="container-fluid">
           <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>
          <a class="navbar-brand" href="#">WebSiteName</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#">
                <i class="fa fa-phone"></i>
                123456789
            </a>
          </li>
          <li>
            <a href="#">
                <i class="fa fa-heart"></i>
                Wishlist(1)
            </a>
          </li>
          <li>
            <a href="#">
                <i class="fa fa-shopping-cart"></i>
                Shopping cart(0)
            </a>
          </li>
          <li>
            <a href="#">
                <i class="fa fa-sign-in"></i>
                Login
            </a>
          </li>
            <li>
            <a href="#">
                <i class="fa fa-user-plus"></i>
                Signup
            </a>
          </li>
        </ul>
        </div>
      </div>
    </nav>










<!-- Footer -->
<div class="container-fluid">
        <div class="row footer">
            <div class="col-sm-12 col-md-4 col-md-offset-1">
                <div class="information">
                    <ul>
                        <p>Information</p>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Delivery information</a></li>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="information">
                    <ul>
                        <p>Customer service</p>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Returns</a></li>
                        <li><a href="#">Site map</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="information">
                    <ul>
                        <p>Extras</p>
                        <li><a href="#">Brands</a></li>
                        <li><a href="#">Gift Sertificates</a></li>
                        <li><a href="#">Affiliate</a></li>
                        <li><a href="#">Specials</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


</body>
</html>