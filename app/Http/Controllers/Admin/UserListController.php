<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class UserListController extends Controller
{
    public function() {
    	$users = User::orderBy('created_at','desc')->get();
    	return view('admin.users_list')->with('users',$users)->paginate(10);
    }
}
