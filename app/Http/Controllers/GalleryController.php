<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Usergallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function addGallery(Request $request){
        $Gallery = new Gallery();
        $Gallery->title = $request->input('name');
        $filei= $request->file('image');
        if(isset($filei))
            if ($filei->isValid()) {
                $Gallery->img=$filei->getClientOriginalExtension();
            }
        $Gallery->save();
        $LastGallery=Gallery::orderBy('created_at', 'desc')->first();
        if(isset($filei))
            if ($filei->isValid()) {
                $file=$LastGallery->id.".".$filei->getClientOriginalExtension();
                $filei->move('content/gallery', $file);
            }
        return back()->withInput();
    }
    public function galleryList(){
        $galleries = Gallery::all();
        return view('admin.galleryList')->with('galleries', $galleries);
    }
    public function galleryListUser(){
        session_start();
        if (isset($_SESSION["username"]))
            $username=$_SESSION["username"];
        else
            $username="null";
        $galleries = Gallery::all();
        return view('user.gallery')->with('galleries', $galleries)->with("username",$username);
    }
    public function deleteGallery($id){
        $galleries = Gallery::find($id);
        $galleries->delete();
        return back();
    }

    public function UserGallery($user_id){
            return view("admin.galleryUser")->with("user_id",$user_id);
    }
    public function addUserGallery(Request $request){
        $LEARN = new Usergallery();
        $LEARN->name = $request->input('name');
        $LEARN->description = $request->input('description');
        $f=$request->input('isVideo');
        if(isset($f)){
            $LEARN->type = $request->input('isVideo');
        }else{
            $LEARN->type =0;
        }

        $LEARN->user_id = $request->input('user_id');
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
        $LastLearn=Usergallery::orderBy('created_at', 'desc')->first();
        if(isset($filei))
            if ($filei->isValid()) {
                $file=$LastLearn->id.".".$filei->getClientOriginalExtension();
                $filei->move('content/usergallery', $file);
            }



        $fileii= $request->file('poster');
        if(isset($fileii))
            if ($fileii->isValid()) {
                $file2=$LastLearn->id."_poster.".$fileii->getClientOriginalExtension();
                $fileii->move('content/usergallery', $file2);
            }

        return back()->withInput();
    }
    public function galleryUserList($user_id){
        $galleries = Usergallery::where("user_id",$user_id)->get();
        return view('admin.galleryUserList')->with('galleries', $galleries);
    }
    public function deleteUserGallery($id){
        $learn = Usergallery::find($id);
        $learn->delete();
        return back();
    }
}
