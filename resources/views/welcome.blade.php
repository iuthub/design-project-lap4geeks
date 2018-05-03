<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <title>Laravel</title>
 
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
 
        <!-- Styles -->
        <style>
            html, body {
                background-image:url("storage/Laptop_on_Desk_HD_Wallpaper.jpg");
                color: green;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                background-size: 100%;
                margin-top: 2%;
                margin-left: 4%;
                margin-right: 4%;   
                margin-bottom: 50%;
                background-repeat:no-repeat;
            }
            .container{
                margin-top: 300%;
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
 
            .links > a {
                color: green;
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
    </head>
    <body>
      

        <div class="flex-center position-ref full-height">
           {{--  @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                    
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
            --}}
            <div class="text-center">
                <h1>Welcome to Lap4Geeks !</h1>
                <h3>Paradise for all kind of programmers , content creaters and  developers </h3>
            </div>

            <div class="container">
                @forelse($products as $product)
                    <div class="small-3 columns">
                        <div class="img-wrapper">
                            <a href="/products/{{$product->id}}"><img style="width:50%" src="/storage/product_images/{{$product->products_picture}}"></a>
                        </div>
                            <h3>{{$product->name}}</h3>
                    </div>
                @empty
                    <h3>No products found </h3>
                @endforelse
            </div>
        </div>
    </body>
</html>