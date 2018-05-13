

@extends('admin.layouts.app')

@section('content')
        <div class="row_1">
            <div class="container-fluid display-table">


                <div class="col-md-6">
                    <header class="clearfix">
                            <div class="class_h1">
                                <b>Recently Added Products</b>
                            </div>    
                    </header>
                </div>

                <div class="content-inner">
                    <table class="table">
                        <thead>
                                <tr>
                                    <th>Product Image</th>
                                    <th>#Id</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Created Time</th>
                                    <th>Updated Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($products) > 0)
                                    @foreach($products as $product)
                                        <tr>
                                           <td><img  style="width:100px" src="/storage/product_images/{{$product->products_picture}}"></td>
                                            <td>{{ $product->id }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>{{ $product->created_at }}</td>
                                            <td>{{ $product->updated_at }}</td>
                                        </tr>
                                    @endforeach

                                @else
                                    <h1> No prodducts were found </h1>
                                @endif
                            </tbody>
                    </table> 
                     <a class="btn btn-primary" href="/admin/all_products">View all products</a>     
                </div>




                 <div class="col-md-6">
                    <header class="clearfix">
                            <div class="class_h1">
                                <b>Users Activities</b>
                            </div>    
                    </header>
                </div>

                <div class="content-inner">
                    <table class="table table-hover">
                        <thead>
                                <tr>
                                    
                                    <th>#Id</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Created Time</th>
                                    <th>Updated Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($uactivities) > 0)
                                    @foreach($uactivities as $uactivity)
                                        <tr>
                                            <td><img style="width:50%" src="/storage/product_images/{{$product->products_picture}}"></td>
                                            <td>{{ $uactivity->id }}</td>
                                            <td>{{ $uactivity->name }}</td>
                                            <td>{{ $uactivity->price }}</td>
                                            <td>{{ $uactivity->created_at }}</td>
                                            <td>{{ $uactivity->updated_at }}</td>
                                        </tr>
                                    @endforeach

                                @else
                                    <h3> No prodducts were found </h3>
                                @endif
                            </tbody>
                    </table> 
                     <a class="btn btn-primary" href="/admin/all_products">View all products</a>     
                </div>
            </div>
        </div>   
  </div>
@endsection
