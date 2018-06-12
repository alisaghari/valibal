<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Talent;
class TalentController extends Controller
{
    public function addTalent(Request $request){
        session_start();
        if (isset($_SESSION["admin_id"])){

        }else{
            return redirect(url("/adminSecret/login"));
        }
        $Talent = new Talent();
        $Talent->name = $request->input('name');
        $Talent->description = $request->input('description');
        $Talent->field = $request->input('field');
        $filei= $request->file('image');
        if(isset($filei))
            if ($filei->isValid()) {
                $Talent->img=$filei->getClientOriginalExtension();
            }
        $Talent->save();
        $LastTalent=Talent::orderBy('created_at', 'desc')->first();
        if(isset($filei))
            if ($filei->isValid()) {
                $file=$LastTalent->id.".".$filei->getClientOriginalExtension();
                $filei->move('content/talents', $file);
            }
        return back()->withInput();
    }
    public function talentList(){
        session_start();
        if (isset($_SESSION["admin_id"])){

        }else{
            return redirect(url("/adminSecret/login"));
        }
        $talents = Talent::all();
        return view('admin.talentList')->with('talents', $talents);
    }
    public function talentListUser(){
        $talents = Talent::all();
        return view('user.talents')->with('talents', $talents);
    }
    public function deleteTalent($id){
        session_start();
        if (isset($_SESSION["admin_id"])){

        }else{
            return redirect(url("/adminSecret/login"));
        }
        $Talent = Talent::find($id);
        $Talent->delete();
        return back();
    }
}
