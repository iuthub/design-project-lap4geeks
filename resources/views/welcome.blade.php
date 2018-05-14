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
    <link href="{{ asset('css/adminLayout/index2.css') }}" rel="stylesheet">

</head>
<body>


{{-- <div class="flex-center position-ref full-height">
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
</div>
--}}






<!-- Header-->
    <div class="header">
        <nav class="main-navbar">

             <div class="menu-icon">
                              <i class="fa fa-bars fa-2x"></i>
                        </div>

                        <div class="logo">
                              <img src="/css/adminLayout/images/logo_img.ico">
                        </div>

                        <div class="menu">
                              <ul>
                                    <li><a href="#">
                                        <i class="fa fa-heart"></i>
                                        Wishlist
                                    </a></li>
                                    <li><a href="#">
                                        <i class="fa fa-shopping-cart"></i>
                                        Shopping Cart
                                    </a></li>

                                     <div class="">
                                        @if (Route::has('login'))
                                            <div class="top-right links">
                                                @auth
                                                        <i class="fa fa-shopping-cart">
                                                        <li><a href="{{ route('logout') }}"
                                                           onclick="event.preventDefault();
                                                                         document.getElementById('logout-form').submit();">
                                                            {{ __('Logout') }}
                                                        </a></li>
                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                @csrf
                                                            </form>
                                                        </i>
                                                      
                                                    </li>
                                                @else
                                                    <i class="fa fa-sign-in"></i>

                                                    <li><a href="{{ route('login') }}">Login</a>
                                                    <i class="fa fa-user-plus"></i>
                                                    <a href="{{ route('register') }}">Register</a></li>
                                                </i>
                                                @endauth
                                            </div>
                                        @endif
                                    </div>
                                     
                              </ul>
                        </div>
                  </nav>
    </div>
<!--Main navbar -->


<!-- End of main Navbar -->
    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="logo-name">
                    <span class="lap">Lap</span><span class="four">4</span><span class="geeks">Geeks</span>
                </div>

            </div>
            <div class="col-sm-12 col-md-5">
                <form>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control input-lg" placeholder="Recipient's username" >
                            <div class="input-group-btn">
                                <input type="submit" name="" class="form-control input-lg" value="Search">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-12 col-md-3">
                <button type="button" class="btn btn-success btn-lg btn-block">
                    <i class="fa fa-shopping-cart"></i>
                    item(s) - $ 0.00
                </button>
            </div>
        </div>
        <div class="jumbotron">
            <h3>Featured</h3>
            <div class="row">
                @foreach($products as $product)
                        <div class="col-sm-12 col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <a href="#">
                                        <img class="card-pic" 
                                        src="/storage/product_images/{{$product->products_picture}}"
                                        alt="Product 1">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="product-desc">
                                        <span class="product-title">
                                            Product
                                            <span class="badge">
                                                New
                                            </span>
                                        </span>
                                        <span class="product-caption">
                                            {{$product->name}}
                                        </span>
                                        <span class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star grey"></i>
                                        </span>
                                        <div class="product-info">
                                            <p>
                                                {{$product->details}}
                                            </p>
                                        </div>
                                        <span class="product-price">
                                            $<b>{{ $product->price }}</b>
                                        </span>
                                        <div class="card-actions">
                                            <button class="btn btn-block btn-primary cardBtn">
                                                <i class="fa fa-shopping-cart"></i>
                                                Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
        </div>  
    </div>
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


<script type="text/javascript">
        
      // Menu-toggle button

      $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
            $('.logo').hide();
      });

      // Scrolling Effect

      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
                  $('.logo').show();

            }

            else {
                  $('nav').removeClass('black');
                  $('.logo').hide();

            }
      })

    </script>




</body>
</html>