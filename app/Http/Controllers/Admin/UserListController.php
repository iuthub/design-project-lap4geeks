<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use DB;
class UserListController extends Controller
{
    public function getUsers() {
    	$users = User::orderBy('created_at','desc')->paginate(1);
    	return view('admin.users.user_list')->with('users',$users);
    }
}
