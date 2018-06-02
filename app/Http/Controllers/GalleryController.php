<?php

namespace App\Http\Controllers;

use App\Gallery;
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
}
