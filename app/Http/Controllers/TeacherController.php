<?php

namespace App\Http\Controllers;

use App\Cvteacher;
use Illuminate\Http\Request;
use App\Teacher;
class TeacherController extends Controller
{
    public function teacherDetails($teacher_id){
        session_start();
        if (isset($_SESSION["username"]))
            $username=$_SESSION["username"];
        else
            $username="null";
        $teachers = Teacher::where("id",$teacher_id)->get();
        $teacherCvs = Cvteacher::where("teacher_id",$teacher_id)->get();
        return view("user.tcvDetails")->with("username",$username)->with("teachers",$teachers)->with("teacherCvs",$teacherCvs);
    }
    public function addTeacher(Request $request){
        session_start();
        if (isset($_SESSION["admin_id"])){

        }else{
            return redirect(url("/adminSecret/login"));
        }
        $Teacher = new Teacher();
        $Teacher->name = $request->input('name');
        $Teacher->title = $request->input('title');
        $Teacher->description = $request->input('description');
        $Teacher->grade = $request->input('grade');
        $Teacher->password = $request->input('password');
        $filei= $request->file('image');
        if(isset($filei))
            if ($filei->isValid()) {
                $Teacher->img=$filei->getClientOriginalExtension();
            }
        $Teacher->save();
        $LastTeacher=Teacher::orderBy('created_at', 'desc')->first();
        if(isset($filei))
            if ($filei->isValid()) {
                $file=$LastTeacher->id.".".$filei->getClientOriginalExtension();
                $filei->move('content/teachers', $file);
            }
        return back()->withInput();
    }
    public function teacherList(){
        session_start();
        if (isset($_SESSION["admin_id"])){

        }else{
            return redirect(url("/adminSecret/login"));
        }
        $teachers = Teacher::all();
        return view('admin.teacherList')->with('teachers', $teachers);
    }
    public function TeacherListUser(){
        session_start();
        if (isset($_SESSION["username"]))
            $username=$_SESSION["username"];
        else
            $username="null";
        $teachers = Teacher::all();
        return view('user.teachers')->with('teachers', $teachers)->with("username",$username);
    }
    public function deleteTeacher($id){
        session_start();
        if (isset($_SESSION["admin_id"])){

        }else{
            return redirect(url("/adminSecret/login"));
        }
        $Teacher = Teacher::find($id);
        $Teacher->delete();
        return back();
    }

    public function Teachercv($id){
        session_start();
        if (isset($_SESSION["admin_id"])){

        }else{
            return redirect(url("/adminSecret/login"));
        }
        return view("admin.teacherCv")->with("id",$id);
    }
    public function addTeachercv(Request $request){
        session_start();
        if (isset($_SESSION["admin_id"])){

        }else{
            return redirect(url("/adminSecret/login"));
        }
        $Cvteacher = new Cvteacher();
        $Cvteacher->name = $request->input('name');
        $Cvteacher->teacher_id = $request->input('id');
        $Cvteacher->description = $request->input('description');
        $filei= $request->file('image');
        if(isset($filei))
            if ($filei->isValid()) {
                $Cvteacher->img=$filei->getClientOriginalExtension();
            }
        $Cvteacher->save();
        $LastTeacherCv=Cvteacher::orderBy('created_at', 'desc')->first();
        if(isset($filei))
            if ($filei->isValid()) {
                $file=$LastTeacherCv->id.".".$filei->getClientOriginalExtension();
                $filei->move('content/teacherscv', $file);
            }
        return back()->withInput();
    }
    public function teacherCvList(){
        $Cvteachers = Cvteacher::all();
        return view('admin.teacherCvList')->with('Cvteachers', $Cvteachers);
    }
    public function deleteTeacherCv($id){
        session_start();
        if (isset($_SESSION["admin_id"])){

        }else{
            return redirect(url("/adminSecret/login"));
        }
        $TeacherCV = Cvteacher::find($id);
        $TeacherCV->delete();
        return back();
    }
    public function teacherCvListId($id){
        session_start();
        if (isset($_SESSION["admin_id"])){

        }else{
            return redirect(url("/adminSecret/login"));
        }
        $Cvteachers = Cvteacher::where("teacher_id",$id)->get();
        return view('admin.teacherCvList')->with('Cvteachers', $Cvteachers);
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
