

<!doctype html>
<html lang="{{ config('app.locale')}}">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Latest compiled and minified css-->
    <title>{{ config('app.name','Admin_Lap4Geeks') }}</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <script src="jquery-3.3.1.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/adminLayout/index.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/adminLayout/default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/adminLayout/column.css')}}">

</head>

<body>

<div class="container-fluid display-table">
    <div class="row display-table-row box">
        <!-- side menu-->
        <div class="col-md-2 display-table-cell col-sm-1 hidden-xs valign-top box" id="side-menu">
            <div id="side-menu-list">
                 <div class="pull-left img">
                    <div>
                        <h1 class="hidden-sm hidden-xs">
                            <a href="#"><img src="/css/adminLayout/images/img_avatar.png" class="img-circle" class="img-responsive" alt="panda" width="70" height="70">
                            </a> Admin 
                        </h1>
                    </div>

                <!--Side munu-->
                
                    <ul>
                        <!--Dashboard-->
                        <li class="link active">
                            <a class="side_menu_item" id="dashboard" href="/admin"><span class="glyphicon glyphicon-th-large" aria-hidden="true">
                                </span><span class="hidden-sm hidden-xs"> Dashboard</span></a>
                        </li>

                        <!--Users List-->
                        <li>
                            <a class="side_menu_item" id="dashboard" href="/admin/user_list"><span class="glyphicon glyphicon-user" aria-hidden="true">
                                </span><span class="hidden-sm hidden-xs"> Users List</span></a>
                        </li>

                        <!--Category dropdown-->
                        <li class="link"><a id="dashboard" class="side_menu_item" href="#collapse-post" data-toggle="collapse" aria-controls="collapse-post">
                                <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                                <span class="hidden-sm hidden-xs">Category</span></a>
                            <ul class="collapse collapseable" id="collapse-post">
                                <li><a href="/admin/categories/create"><span class="glyphicon glyphicon-plus-sign"></span> Add Category</a></li>
                                <li><a href="/admin/categories"><span class="glyphicon glyphicon-list-alt"></span> Category List</a></li>
                            </ul>
                        </li>

                        <!--Product dropdown-->
                        <li class="link"><a id="dashboard" class="side_menu_item" href="#collapse-products" data-toggle="collapse" aria-controls="collapse-products">
                                <span class="glyphicon glyphicon-gift" aria-hidden="true"></span>
                                <span class="hidden-sm hidden-xs">Product</span></a>
                            <ul class="collapse collapseable" id="collapse-products">
                                <li><a href="/admin/products/create"><span class="glyphicon glyphicon-plus-sign"></span> Add Product</a></li>
                                <li><a href="/admin/all_products"><span class="glyphicon glyphicon-list-alt"></span> Product List</a></li>
                            </ul>
                        </li>
                        <!--Order List-->

                        <li>
                            <a id="dashboard" class="side_menu_item" href="/admin/order_list"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true">
                                </span><span class="hidden-sm hidden-xs"> Order List</span></a>
                        </li>



                        <!--Mail Box-->
                        <li>
                            <a id="dashboard" class="side_menu_item" href="mail_box.html"><span class="glyphicon glyphicon-envelope" aria-hidden="true">
                                </span><span class="hidden-sm hidden-xs"> Mail Box</span></a>
                        </li>

                        <!--Admin Profile-->
                        <li>
                            <a id="dashboard" class="side_menu_item" href=""><span class="glyphicon glyphicon-user" aria-hidden="true">
                                </span><span class="hidden-sm hidden-xs"> Admin Profile</span></a>
                        </li>
{{-- TTOOOOOOOOOOOOOO DDOOOOOOOOOOOOOOOOOO --}}
                        <!--Settings-->
                        <li >
                            <a id="dashboard" class="side_menu_item" id="app-settings" href="settings.html"><span class="glyphicon glyphicon-wrench" aria-hidden="true">
                                </span><span class="hidden-sm hidden-xs"> Application Setting</span></a>
                        </li>

                    </ul>

                </div>
            </div>
        </div>

        <!--main content-->
        <div class="cont_main"> 
             <nav class="navbar navbar-default navbar-fixed-top">
                    <!--Header -->
                    <header style="background-color: #2f4050 ; text-color: yellow" id="nav-header" class="clearfix">
                        <!--search input-->
                        <div class="col-md-5">
                            <form class="navbar-form navbar-left" action="/action_page.php">
                              <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search" name="search">
                                <div class="input-group-btn">
                                  <button class="btn btn-default" type="submit">
                                    <i class="glyphicon glyphicon-search"></i>
                                  </button>
                                </div>
                              </div>
                            </form>
                        </div>
                        
                        <!--glyphicons--> 
                        <div class="col-md-7">
                            <ul class="pull-right">
                                <li id="welcome" class="hidden-xs">Welcome to administration area</li>
                                
                                <li >
                                     <a style="color:#CCEEFF" href="{{ route('logout') }}" class="logout"
                                         onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();"> <span style="color:#CCEEFF" class="glyphicon glyphicon-log-out"></span>
                                         {{ __('Logout') }}

                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                    </form>                             
                                </li>    
                            </ul>
                        </div>

                    </header>
                </nav>


            <div id="content">
                 @include('admin.informMessages.messages')
                 @yield('content')
             </div> 
            </div>

        </div>
    </div>

</div>

</div>
</div>
<script>
    $(document).ready(function() {
        $(".side_menu_item").click(function() {
           

           
        })
    });
</script>

<script src="js/func.js"></script>
</body>
</html>
