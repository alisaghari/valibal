<?php

namespace App\Http\Controllers;


use App\Attendance;
use App\Cart;
use App\Classweek;
use App\Gallery;
use App\Learn;
use App\Notification;
use App\Talent;
use App\Teacher;
use App\Usergallery;
use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function findPage($product_id){
        $users=[];

            return view("admin.attendancesList")->with("users",$users)->with("product_id",$product_id);
    }
    public function findResult(Request $request){
        $users=User::where("nationalCode", $request->input('nc'))->get();
        foreach ($users as $user){
          $userId=  $user["id"];
        }

        $users=Attendance::join("users","attendances.user_id","=","users.id")->where("attendances.product_id",$request->input('product_id'))->where("attendances.user_id",$userId)->get();

        return view("admin.attendancesList")->with("users",$users)->with("product_id",$request->input('product_id'));
    }
    public function tlogin(){
        return view("admin.tlogin");
    }
    public function loginTeacher(Request $request){
        session_start();
        $users=Teacher::where("name", $request->input('username'))->where("password", $request->input('password'))->get();
        foreach ($users as $user) {
            $_SESSION["teacher_id"] = $user["id"];
            $_SESSION["username"] = $user["name"] ;
            return redirect(url("/adminSecret/product/list"));
        }
        return back();
    }
    public function attend($product_id){
        session_start();
        if (isset($_SESSION["admin_id"]) || isset($_SESSION["teacher_id"])){

        }else{
            return redirect(url("/adminSecret/login"));
        }
        $users = Cart::join("users","carts.user_id","=","users.id")->where("Carts.product_id",$product_id)->get(['users.id AS user_id']);
        return view("admin.attendances")->with('users', $users)->with("product_id",$product_id);
    }
    public function attendp($product_id,$user_id,$date){
        session_start();
        $Attendance= new Attendance();
        $Attendance->user_id=$user_id;
        $Attendance->product_id=$product_id;
        $Attendance->teacher_id=$_SESSION["teacher_id"];
        $Attendance->date=$date;
        $Attendance->status="حاضر";
        $Attendance->save();
    }
    public function attenda($product_id,$user_id,$date){
        session_start();
        $Attendance= new Attendance();
        $Attendance->user_id=$user_id;
        $Attendance->product_id=$product_id;
        $Attendance->teacher_id=$_SESSION["teacher_id"];
        $Attendance->date=$date;
        $Attendance->status="غایب";
        $Attendance->save();
    }
    public function index(){
        $teachers=Teacher::orderBy('created_at', 'desc')
            ->take(4)
            ->get();;
        $galleries=Gallery::orderBy('created_at', 'desc')
            ->take(15)
            ->get();;
        $talents=Talent::orderBy('created_at', 'desc')
            ->take(4)
            ->get();
        $notifications=Notification::orderBy('created_at', 'desc')
            ->take(2)
            ->get();
        $learns=Learn::where("ext","mp4")->orderBy('created_at', 'desc')
            ->take(2)
            ->get();
        $classes=Classweek::orderBy('created_at', 'desc')
            ->take(1)
            ->get();
        session_start();
        if (isset($_SESSION["username"]))
        $username=$_SESSION["username"];
        else
            $username="null";
        return view('user.index')->with("username",$username)->with("teachers",$teachers)->with("galleries",$galleries)->with("talents",$talents)->with("notifications",$notifications)->with("learns",$learns)->with("classes", $classes);
    }
    public function ContactUs(){
        session_start();
        if (isset($_SESSION["username"]))
            $username=$_SESSION["username"];
        else
            $username="null";
        return view('user.contact')->with("username",$username);
    }
    public function registerExec(Request $request)
    {
      $USER = new User;
  		$USER->name = $request->input('name');
  		$USER->family = $request->input('family');
      $USER->gender = $request->input('gender');
      $USER->grade = $request->input('grade');
      $USER->father = $request->input('father');
      $USER->fatherPhone = $request->input('fatherPhone');
      $USER->nationalCode = $request->input('nationalCode');
      $USER->emergencyPhone = $request->input('emergencyPhone');
      $USER->birthday = $request->input('birthday');
      $USER->homeAddress = $request->input('homeAddress');
      $USER->homePhone = $request->input('homePhone');
      $USER->fatherWorkAddress = $request->input('fatherWorkAddress');
      $USER->studentPhone = $request->input('studentPhone');
      $USER->sportsInsuranceNumber = $request->input('sportsInsuranceNumber');
      $USER->sickness = $request->input('sickness');
      $filei1 = $request->file('image1');
      $filei2 = $request->file('image2');
      $filei3 = $request->file('image3');
      if(isset($filei1))
             if ($filei1->isValid()) {
           $USER->img1=$filei1->getClientOriginalExtension();
             }
      if(isset($filei2))
            if ($filei2->isValid()) {
          $USER->img2=$filei2->getClientOriginalExtension();
                    }
      if(isset($filei3))
            if ($filei3->isValid()) {
          $USER->img3=$filei3->getClientOriginalExtension();
                           }
  		$USER->save();
      $LastUser=User::orderBy('created_at', 'desc')->first();
      $filei1 = $request->file('image1');
      $filei2 = $request->file('image2');
      $filei3 = $request->file('image3');


if(isset($filei1))
       if ($filei1->isValid()) {
           $file1=$LastUser->id."A.".$filei1->getClientOriginalExtension();
           $filei1->move('content/user', $file1);
       }
if(isset($filei2))
       if ($filei2->isValid()) {
           $file2=$LastUser->id."B.".$filei2->getClientOriginalExtension();
           $filei2->move('content/user', $file2);
       }
if(isset($filei3))
       if ($filei3->isValid()) {
         $file3=$LastUser->id."C.".$filei3->getClientOriginalExtension();
           $filei3->move('content/user', $file3);
       }

      return back()->withInput();
    }
    public function loginExec(Request $request){
        session_start();
        $users=User::where("studentPhone", $request->input('studentPhone'))->where("nationalCode", $request->input('nationalCode'))->get();
        foreach ($users as $user) {
            $_SESSION["user_id"] = $user["id"];
            $_SESSION["username"] = $user["name"] . " " . $user["family"];
        }
        return back();
    }

    public function productCartAdd($id){
        session_start();
            $Cart=new Cart();
            $Cart->product_id=$id;
            $Cart->user_id=$_SESSION["user_id"];
            $Cart->save();
            return redirect(url("/product/cart/view"));
    }
    public function productCartView(){
        session_start();
        $carts = Cart::join("Products","carts.product_id","=","Products.id")->where("Carts.user_id",$_SESSION["user_id"])->get(['carts.id AS cart_id', 'products.*']);
        $username=$_SESSION["username"];
        return view('user.cart')->with("carts",$carts)->with("username",$username);
    }
    public function galleryView(){
        session_start();
        $galleries = Usergallery::where("user_id",$_SESSION["user_id"])->get();
        $username=$_SESSION["username"];
        return view('user.usergallery')->with("galleries",$galleries)->with("username",$username);
    }
    public function productCartDelete($id){
        $Cart = Cart::find($id);
        $Cart->delete();
        return back();
    }

}
