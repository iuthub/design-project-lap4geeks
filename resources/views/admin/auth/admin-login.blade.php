<!DOCTYPE html>
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
  
   <style type="text/css">
        body {
            background-image: url('/css/adminLayout/images/laptop.jpg');
            background-size: 100%;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
    <div class="col-md-12">
        <nav><img src="/css/adminLayout/images/l4g_logo.png" alt="logo" width="20%"></nav>
    </div>
  
        <div class="col-md-12">
            <div class="panel-heading"><h1 style="color: #66ffff">Admin Login</h1></div>
                 <div class="panel-body">
                     <form class="form-horizontal" role="form" method="POST" action="{{ route('admin.login.submit') }}">
                         {{ csrf_field() }}

                         <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                             <label style="color: #66ffff" for="email" class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label style="color: #66ffff" for="password" class="col-md-4 control-label">Password</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <div class="checkbox">
                            <label style="color: #66ffff">
                                <input  type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Login
                        </button>

                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                    </div>
                </div>
                 </form>
            </div>
        </div>
     </div>
</body>
</html>



