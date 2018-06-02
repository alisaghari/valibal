<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Learn;
class LearnController extends Controller
{
    public function addLearn(Request $request){
        session_start();
        if (isset($_SESSION["admin_id"])){

        }else{
            return redirect(url("/adminSecret/login"));
        }
        $LEARN = new Learn();
        $LEARN->name = $request->input('name');
        $LEARN->description = $request->input('description');
        $LEARN->content = $request->input('content');
        $f=$request->input('isVideo');
        if(isset($f)){
            $LEARN->type = $request->input('isVideo');
        }else{
            $LEARN->type =0;
        }

        $LEARN->category = $request->input('category');
        $filei= $request->file('file');
        if(isset($filei))
            if ($filei->isValid()) {
                $LEARN->ext=$filei->getClientOriginalExtension();
            }
        $fileii= $request->file('poster');
        if(isset($fileii))
            if ($fileii->isValid()) {
                $LEARN->extp=$fileii->getClientOriginalExtension();
            }
        $LEARN->save();
        $LastLearn=Learn::orderBy('created_at', 'desc')->first();
        if(isset($filei))
            if ($filei->isValid()) {
                $file=$LastLearn->id.".".$filei->getClientOriginalExtension();
                $filei->move('content/learns', $file);
            }



        $fileii= $request->file('poster');
        if(isset($fileii))
            if ($fileii->isValid()) {
                $file2=$LastLearn->id."_poster.".$fileii->getClientOriginalExtension();
                $fileii->move('content/learns', $file2);
            }

        return back()->withInput();
    }
    public function learnList(){
        session_start();
        if (isset($_SESSION["admin_id"])){

        }else{
            return redirect(url("/adminSecret/login"));
        }
        $learns = Learn::all();
        return view('admin.learnList')->with('learns', $learns);
    }
    public function learnListUser(){
        $learns = Learn::all();
        session_start();
        if (isset($_SESSION["username"]))
            $username=$_SESSION["username"];
        else
            $username="null";
        return view('user.learns')->with('learns', $learns)->with("username",$username);
    }
    public function deletelearn($id){
        session_start();
        if (isset($_SESSION["admin_id"])){

        }else{
            return redirect(url("/adminSecret/login"));
        }
        $learn = Learn::find($id);
        $learn->delete();
        return back();
    }
}
