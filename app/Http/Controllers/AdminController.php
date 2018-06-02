<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AdminController extends Controller
{

    public function userList()
    {
      $users = User::all();
        return view('admin.userList')->with('users', $users);
    }
    public function userDetails($id){
        $users = User::where("id",$id)->get();
        return view('admin.userDetails')->with('users', $users);
    }
}
