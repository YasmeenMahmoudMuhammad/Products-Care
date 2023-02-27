<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;


class UserController extends Controller
{
    public function users()
    {
    	$users = User::where('role',0)->get();
    	//dd($users);
    	return view('admin/user',compact('users'));
    }

    public function admins()
    {
    	$users = User::where('role',1)->get();
    	//dd($admins);
    	return view('admin/user',compact('users'));
    }
}
