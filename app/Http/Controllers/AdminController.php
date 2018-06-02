<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use App\User;
class AdminController extends Controller
{
    public function login(){
        return view("admin.tlogin");
    }
    public function loginAdmin(Request $request){
        session_start();
        $users=Admin::where("name", $request->input('username'))->where("password", $request->input('password'))->get();
        foreach ($users as $user) {
            $_SESSION["admin_id"] = $user["id"];
            $_SESSION["username"] = $user["username"] ;
        }
        return back();
    }
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
