<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;
class NotificationController extends Controller
{
    public function addNotification(Request $request){
        session_start();
        if (isset($_SESSION["admin_id"])){

        }else{
            return redirect(url("/adminSecret/login"));
        }
        $Notification = new Notification();
        $Notification->name = $request->input('name');
        $Notification->description = $request->input('description');
        $Notification->short_description = $request->input('short_description');
        $filei= $request->file('image');
        if(isset($filei))
            if ($filei->isValid()) {
                $Notification->img=$filei->getClientOriginalExtension();
            }
        $Notification->save();
        $LastNotification=Notification::orderBy('created_at', 'desc')->first();
        if(isset($filei))
            if ($filei->isValid()) {
                $file=$LastNotification->id.".".$filei->getClientOriginalExtension();
                $filei->move('content/notifications', $file);
            }
        return back()->withInput();
    }
    public function notificationList(){
        session_start();
        if (isset($_SESSION["admin_id"])){

        }else{
            return redirect(url("/adminSecret/login"));
        }
        $notifications = Notification::all();
        return view('admin.notificationList')->with('notifications', $notifications);
    }
    public function notificationListUser(){
        session_start();
        if (isset($_SESSION["username"]))
            $username=$_SESSION["username"];
        else
            $username="null";
        $notifications = Notification::all();
        return view('user.notifications')->with('notifications', $notifications)->with("username",$username);
    }
    public function deleteNotification($id){
        session_start();
        if (isset($_SESSION["admin_id"])){

        }else{
            return redirect(url("/adminSecret/login"));
        }
        $notifications = Notification::find($id);
        $notifications->delete();
        return back();
    }
}
