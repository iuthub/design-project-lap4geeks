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
                        <a href="#"><img src="img_avatar.png" class="img-circle" class="img-responsive" alt="panda" width="70" height="70">
                        </a> Username
                    </h1>
                </div>

                <!--Side munu-->
                <div id="side-menu-list">
                    <ul>
                        <!--Dashboard-->
                        <li class="link active">
                            <a href="index.html"><span class="glyphicon glyphicon-th-large" aria-hidden="true">
								</span><span class="hidden-sm hidden-xs"> Dashboard</span></a>
                        </li>

                        <!--Users List-->
                        <li>
                            <a href="dashboard.html"><span class="glyphicon glyphicon-user" aria-hidden="true">
								</span><span class="hidden-sm hidden-xs"> Users List</span></a>
                        </li>

                        <!--Category dropdown-->
                        <li class="link"><a href="#collapse-post" data-toggle="collapse" aria-controls="collapse-post">
                                <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                                <span class="hidden-sm hidden-xs">Category</span></a>
                            <ul class="collapse collapseable" id="collapse-post">
                                <li><a href="#new_category.html"><span class="glyphicon glyphicon-plus-sign"></span> Add Category</a></li>
                                <li><a href="category_list.html"><span class="glyphicon glyphicon-list-alt"></span> Category List</a></li>
                            </ul>
                        </li>

                        <!--Product dropdown-->
                        <li class="link"><a href="#collapse-products" data-toggle="collapse" aria-controls="collapse-products">
                                <span class="glyphicon glyphicon-gift" aria-hidden="true"></span>
                                <span class="hidden-sm hidden-xs">Product</span></a>
                            <ul class="collapse collapseable" id="collapse-products">
                                <li><a href="add_product.html"><span class="glyphicon glyphicon-plus-sign"></span> Add Product</a></li>
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
            <div class="row">
                <!--Header -->
                <header id="nav-header" class="clearfix">
                    <!--search input-->
                    <div class="col-md-5">

                        <nav class="navbar-default pull-left">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu-list">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </nav>
                        <input type="text" class="hidden-sm hidden-xs" id="header-search-field" placeholder="Search for something  "></div>

                    <!--glyphicons-->
                    <div class="col-md-7">
                        <ul class="pull-right">
                            <li id="welcome" class="hidden-xs">Welcome to administration area</li>
                            <li class="fixed-width"><a href="#"><span class="glyphicon glyphicon-bell"></span><span class="label label-warning">3</span></a></li>
                            <li class="fixed-width"><a href="#"><span class="glyphicon glyphicon-envelope"></span><span class="label label-message">3</span></a></li>
                            <li><a href="#" class="logout"><span class="glyphicon glyphicon-log-out"></span><b> Log Out</b></a></li>

                        </ul>
                    </div>

                </header>
            </div>


            <div id="dashboard-con">
                <div class="row">
                    <div class="col-md-6 dashboard-left-cell">
                        <div class="admin-content-con">
                            <header class="clearfix">
                                <h3 class="pull-left">Articles</h3>
                                <a class="btn btn-xs btn-primary pull-right"  href="#" role="button">Creates New Article</a>
                            </header>
                            <table class="table table-striped ">
                                <thead>
                                <tr>
                                    <th>title</th>
                                    <th>replies</th>
                                    <th>date</th>
                                    <th>action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>First post of many to come..</td>
                                    <td>20</td>
                                    <td>2 days ago</td>
                                    <td>
                                        <a href="#" class="btn btn-xs btn-warning" role="button">edit</a>
                                        <a href="#" class="btn btn-xs btn-primary" role="button">view</a>
                                        <a href="#" class="btn btn-xs btn-danger" role="button">del</a>

                                    </td>
                                </tr>

                                <tr>
                                    <td>First post of many to come..</td>
                                    <td>20</td>
                                    <td>2 days ago</td>
                                    <td>
                                        <a href="#" class="btn btn-xs btn-warning" role="button">edit</a>
                                        <a href="#" class="btn btn-xs btn-primary" role="button">view</a>
                                        <a href="#" class="btn btn-xs btn-danger" role="button">del</a>

                                    </td>
                                </tr>

                                <tr>
                                    <td>First post of many to come..</td>
                                    <td>20</td>
                                    <td>2 days ago</td>
                                    <td>
                                        <a href="#" class="btn btn-xs btn-warning" role="button">edit</a>
                                        <a href="#" class="btn btn-xs btn-primary" role="button">view</a>
                                        <a href="#" class="btn btn-xs btn-danger" role="button">del</a>

                                    </td>
                                </tr>

                                <tr>
                                    <td>First post of many to come..</td>
                                    <td>20</td>
                                    <td>2 days ago</td>
                                    <td>
                                        <a href="#" class="btn btn-xs btn-warning" role="button">edit</a>
                                        <a href="#" class="btn btn-xs btn-primary" role="button">view</a>
                                        <a href="#" class="btn btn-xs btn-danger" role="button">del</a>

                                    </td>
                                </tr>

                                </tbody>
                            </table>
                            <div class="clearfix">
                                <a href="#" class="pull-right text-link">view articles</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 dashboard-right-cell">
                        <div class="admin-content-con">
                            <header>
                                <h5>Comments</h5>
                            </header>

                            <div class="comment-head-dash clearfix">
                                <div class="commenter-name-dash pull-left">Kingsly ijomah</div>
                                <div class="days-dash pull-right">2 days ago</div>
                            </div>
                            <p class="comment-dash">Loremi ipsum somethonf jppahnnfed atn thsat asll obeceos osasdo change qwerty.Loremi ipsum somethonf jppahnnfed atn thsat asll obeceos osasdo change qwerty.
                            </p>
                            <small class="comment-date-dash">Today is 30/04/2018</small>
                            <hr>

                            <div class="comment-head-dash clearfix">
                                <div class="commenter-name-dash pull-left">Kingsly ijomah</div>
                                <div class="days-dash pull-right">2 days ago</div>
                            </div>
                            <p class="comment-dash">Loremi ipsum somethonf jppahnnfed atn thsat asll obeceos osasdo change qwerty.Loremi ipsum somethonf jppahnnfed atn thsat asll obeceos osasdo change qwerty.
                            </p>
                            <small class="comment-date-dash">Today is 30/04/2018</small>
                            <hr>

                            <div class="clearfix">
                                <a href="#" class="pull-right text-link">View all comments</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="admin-content-con">

                <div class="row">
                    <div class="col-md-12">
                        <header>
                            <h5>Comments</h5>
                        </header>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Created</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Akabar aka</td>
                                <td>Akbar@mail.ru</td>
                                <td><a href="#" class="label label-default">pending</a></td>
                                <td>Today 6:00 am 30/04/2018</td>
                                <td><a href="#" class="label label-danger">delete</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Akabar aka</td>
                                <td>Akbar@mail.ru</td>
                                <td><a href="#" class="label label-success">active</a></td>
                                <td>Today 6:00 am 30/04/2018</td>
                                <td><a href="#" class="label label-danger">delete</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Akabar aka</td>
                                <td>Akbar@mail.ru</td>
                                <td><a href="#" class="label label-success">active</a></td>
                                <td>Today 6:00 am 30/04/2018</td>
                                <td><a href="#" class="label label-danger">delete</a></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Akabar aka</td>
                                <td>Akbar@mail.ru</td>
                                <td><a href="#" class="label label-default">pending</a></td>
                                <td>Today 6:00 am 30/04/2018</td>
                                <td><a href="#" class="label label-danger">delete</a></td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>


        </div>
    </div>

</div>

</div>
</div>


<script src="js/func.js"></script>
</body>
</html>
{{-- @extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Admin Dashboard</div>

                    <div class="panel-body">
                        @component('components.who-is-logged-in')
                        @endcomponent
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
