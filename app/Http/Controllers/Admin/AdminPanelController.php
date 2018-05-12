<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\OrderList;
use App\User;
use App\Product;
use App\Category;
use App\UserActivity;


class AdminPanelController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('created_at','desc')->take(5)->get();
        $orders = Order::orderBy('created_at','desc')->take(5)->get();
        $uactivities = UserActivity::orderBy('created_at','desc')->take(5)->get();

        return view('admin.admin_home')->with('products',$products)->with('orders',$orders)->with('uactivities',$uactivities);
    }

    /**
     * Show the order list.
     *
     * @return \Illuminate\Http\Response
     */

    public function getOrderList()
    {
        $orders = Order::orderBy('created','desc')->paginate(10);
        return view('admin.orders.order_list')->with('order_list',$orders);
    }

     
}
