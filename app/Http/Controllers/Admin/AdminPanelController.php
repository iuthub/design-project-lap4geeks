<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\OrderList;
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
        return view('admin.admin_home');
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
