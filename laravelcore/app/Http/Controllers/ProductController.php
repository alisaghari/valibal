<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Classweek;
use App\Product;
use App\Program;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productDetails($product_id){
        session_start();
        if (isset($_SESSION["username"]))
            $username=$_SESSION["username"];
        else
            $username="null";
        $Programs = Program::where("product_id",$product_id)->get();
        $Products = Product::where("id",$product_id)->get();
        return view("user.productDetails")->with("username",$username)->with("Products",$Products)->with("Programs",$Programs);
    }
    public function addProduct(Request $request){
        session_start();
        if (isset($_SESSION["admin_id"])){

        }else{
            return redirect(url("/adminSecret/login"));
        }
        $PRODUCT = new Product();
        $PRODUCT->name = $request->input('name');
        $PRODUCT->description = $request->input('description');
        $PRODUCT->price = $request->input('price');
        $PRODUCT->teacher = $request->input('teacher');
        $PRODUCT->start_day = $request->input('startDate');
        $PRODUCT->end_day = $request->input('endDate');
        $f=$request->input('loop');
        if(isset($f)){
            $PRODUCT->loopCourse = $request->input('loop');
        }else{
            $PRODUCT->loopCourse =0;
        }

        $PRODUCT->category = $request->input('category');
        $filei= $request->file('image');
        if(isset($filei))
            if ($filei->isValid()) {
                $PRODUCT->img=$filei->getClientOriginalExtension();
            }
        $PRODUCT->save();
        $LastProduct=Product::orderBy('created_at', 'desc')->first();
        if(isset($filei))
            if ($filei->isValid()) {
                $file=$LastProduct->id.".".$filei->getClientOriginalExtension();
                $filei->move('content/products', $file);
            }
        return back()->withInput();
    }
    public function productList(){
        session_start();
        if (isset($_SESSION["admin_id"]) || isset($_SESSION["teacher_id"])){

        }else{
            return redirect(url("/adminSecret/login"));
        }
        $products = Product::all();
        return view('admin.productList')->with('products', $products);
    }
    public function productListUser(){
        $products = Product::all();
        session_start();
        if (isset($_SESSION["username"]))
            $username=$_SESSION["username"];
        else
            $username="null";
        return view('user.products')->with('products', $products)->with("username",$username);
    }
    public function deleteProduct($id){
        session_start();
        if (isset($_SESSION["admin_id"])){

        }else{
            return redirect(url("/adminSecret/login"));
        }
        $Product = Product::find($id);
        $Product->delete();
        return back();
    }
    public function ProductProgram($id){
        session_start();
        if (isset($_SESSION["admin_id"])){

        }else{
            return redirect(url("/adminSecret/login"));
        }
        $Programs = Program::where("product_id",$id)->get();
        return view('admin.program')->with("id",$id)->with("Programs",$Programs);
    }
    public function ProductProgramAdd(Request $request){
        session_start();
        if (isset($_SESSION["admin_id"])){

        }else{
            return redirect(url("/adminSecret/login"));
        }
        $Program = Program::where("product_id",$request->input('product_id'))->where("week","1");
        $Program->delete();
        $Program = new Program();
        $Program->product_id = $request->input('product_id');
        $Program->day_number = 0;
        $Program->day = $request->input('day1');
        $Program->h10 = $request->input('h101');
        $Program->h12 = $request->input('h121');
        $Program->h14 = $request->input('h141');
        $Program->h16 = $request->input('h161');
        $Program->h18 = $request->input('h181');
        $Program->h20 = $request->input('h201');
        $Program->week="1";
        $Program->save();
        $Program = new Program();
        $Program->product_id = $request->input('product_id');
        $Program->day_number = 1;
        $Program->day = $request->input('day2');
        $Program->h10 = $request->input('h102');
        $Program->h12 = $request->input('h122');
        $Program->h14 = $request->input('h142');
        $Program->h16 = $request->input('h162');
        $Program->h18 = $request->input('h182');
        $Program->h20 = $request->input('h202');
        $Program->week="1";
        $Program->save();
        $Program = new Program();
        $Program->product_id = $request->input('product_id');
        $Program->day_number =2;
        $Program->day = $request->input('day3');
        $Program->h10 = $request->input('h103');
        $Program->h12 = $request->input('h123');
        $Program->h14 = $request->input('h143');
        $Program->h16 = $request->input('h163');
        $Program->h18 = $request->input('h183');
        $Program->h20 = $request->input('h203');
        $Program->week="1";
        $Program->save();
        $Program = new Program();
        $Program->product_id = $request->input('product_id');
        $Program->day_number = 3;
        $Program->day = $request->input('day4');
        $Program->h10 = $request->input('h104');
        $Program->h12 = $request->input('h124');
        $Program->h14 = $request->input('h144');
        $Program->h16 = $request->input('h164');
        $Program->h18 = $request->input('h184');
        $Program->h20 = $request->input('h204');
        $Program->week="1";
        $Program->save();
        $Program = new Program();
        $Program->product_id = $request->input('product_id');
        $Program->day_number = 4;
        $Program->day = $request->input('day5');
        $Program->h10 = $request->input('h105');
        $Program->h12 = $request->input('h125');
        $Program->h14 = $request->input('h145');
        $Program->h16 = $request->input('h165');
        $Program->h18 = $request->input('h185');
        $Program->h20 = $request->input('h205');
        $Program->week="1";
        $Program->save();
        $Program = new Program();
        $Program->product_id = $request->input('product_id');
        $Program->day_number = 5;
        $Program->day = $request->input('day6');
        $Program->h10 = $request->input('h106');
        $Program->h12 = $request->input('h126');
        $Program->h14 = $request->input('h146');
        $Program->h16 = $request->input('h166');
        $Program->h18 = $request->input('h186');
        $Program->h20 = $request->input('h206');
        $Program->week="1";
        $Program->save();
        $Program = new Program();
        $Program->product_id = $request->input('product_id');
        $Program->day_number = 6;
        $Program->day = $request->input('day7');
        $Program->h10 = $request->input('h107');
        $Program->h12 = $request->input('h127');
        $Program->h14 = $request->input('h147');
        $Program->h16 = $request->input('h167');
        $Program->h18 = $request->input('h187');
        $Program->h20 = $request->input('h207');
        $Program->week="1";
        $Program->save();
        return back()->withInput();
    }
    public function ProductProgramAdd2(Request $request){
        session_start();
        if (isset($_SESSION["admin_id"])){

        }else{
            return redirect(url("/adminSecret/login"));
        }
        $Program = Program::where("product_id",$request->input('product_id'))->where("week","2");
        $Program->delete();
        $Program = new Program();
        $Program->product_id = $request->input('product_id');
        $Program->day_number = 0;
        $Program->day = $request->input('day1');
        $Program->h10 = $request->input('h101');
        $Program->h12 = $request->input('h121');
        $Program->h14 = $request->input('h141');
        $Program->h16 = $request->input('h161');
        $Program->h18 = $request->input('h181');
        $Program->h20 = $request->input('h201');
        $Program->week="2";
        $Program->save();
        $Program = new Program();
        $Program->product_id = $request->input('product_id');
        $Program->day_number = 1;
        $Program->day = $request->input('day2');
        $Program->h10 = $request->input('h102');
        $Program->h12 = $request->input('h122');
        $Program->h14 = $request->input('h142');
        $Program->h16 = $request->input('h162');
        $Program->h18 = $request->input('h182');
        $Program->h20 = $request->input('h202');
        $Program->week="2";
        $Program->save();
        $Program = new Program();
        $Program->product_id = $request->input('product_id');
        $Program->day_number =2;
        $Program->day = $request->input('day3');
        $Program->h10 = $request->input('h103');
        $Program->h12 = $request->input('h123');
        $Program->h14 = $request->input('h143');
        $Program->h16 = $request->input('h163');
        $Program->h18 = $request->input('h183');
        $Program->h20 = $request->input('h203');
        $Program->week="2";
        $Program->save();
        $Program = new Program();
        $Program->product_id = $request->input('product_id');
        $Program->day_number = 3;
        $Program->day = $request->input('day4');
        $Program->h10 = $request->input('h104');
        $Program->h12 = $request->input('h124');
        $Program->h14 = $request->input('h144');
        $Program->h16 = $request->input('h164');
        $Program->h18 = $request->input('h184');
        $Program->h20 = $request->input('h204');
        $Program->week="2";
        $Program->save();
        $Program = new Program();
        $Program->product_id = $request->input('product_id');
        $Program->day_number = 4;
        $Program->day = $request->input('day5');
        $Program->h10 = $request->input('h105');
        $Program->h12 = $request->input('h125');
        $Program->h14 = $request->input('h145');
        $Program->h16 = $request->input('h165');
        $Program->h18 = $request->input('h185');
        $Program->h20 = $request->input('h205');
        $Program->week="2";
        $Program->save();
        $Program = new Program();
        $Program->product_id = $request->input('product_id');
        $Program->day_number = 5;
        $Program->day = $request->input('day6');
        $Program->h10 = $request->input('h106');
        $Program->h12 = $request->input('h126');
        $Program->h14 = $request->input('h146');
        $Program->h16 = $request->input('h166');
        $Program->h18 = $request->input('h186');
        $Program->h20 = $request->input('h206');
        $Program->week="2";
        $Program->save();
        $Program = new Program();
        $Program->product_id = $request->input('product_id');
        $Program->day_number = 6;
        $Program->day = $request->input('day7');
        $Program->h10 = $request->input('h107');
        $Program->h12 = $request->input('h127');
        $Program->h14 = $request->input('h147');
        $Program->h16 = $request->input('h167');
        $Program->h18 = $request->input('h187');
        $Program->h20 = $request->input('h207');
        $Program->week="2";
        $Program->save();
        return back()->withInput();
    }
    public function ProductProgramAdd3(Request $request){
        session_start();
        if (isset($_SESSION["admin_id"])){

        }else{
            return redirect(url("/adminSecret/login"));
        }
        $Program = Program::where("product_id",$request->input('product_id'))->where("week","3");
        $Program->delete();
        $Program = new Program();
        $Program->product_id = $request->input('product_id');
        $Program->day_number = 0;
        $Program->day = $request->input('day1');
        $Program->h10 = $request->input('h101');
        $Program->h12 = $request->input('h121');
        $Program->h14 = $request->input('h141');
        $Program->h16 = $request->input('h161');
        $Program->h18 = $request->input('h181');
        $Program->h20 = $request->input('h201');
        $Program->week="3";
        $Program->save();
        $Program = new Program();
        $Program->product_id = $request->input('product_id');
        $Program->day_number = 1;
        $Program->day = $request->input('day2');
        $Program->h10 = $request->input('h102');
        $Program->h12 = $request->input('h122');
        $Program->h14 = $request->input('h142');
        $Program->h16 = $request->input('h162');
        $Program->h18 = $request->input('h182');
        $Program->h20 = $request->input('h202');
        $Program->week="3";
        $Program->save();
        $Program = new Program();
        $Program->product_id = $request->input('product_id');
        $Program->day_number =2;
        $Program->day = $request->input('day3');
        $Program->h10 = $request->input('h103');
        $Program->h12 = $request->input('h123');
        $Program->h14 = $request->input('h143');
        $Program->h16 = $request->input('h163');
        $Program->h18 = $request->input('h183');
        $Program->h20 = $request->input('h203');
        $Program->week="3";
        $Program->save();
        $Program = new Program();
        $Program->product_id = $request->input('product_id');
        $Program->day_number = 3;
        $Program->day = $request->input('day4');
        $Program->h10 = $request->input('h104');
        $Program->h12 = $request->input('h124');
        $Program->h14 = $request->input('h144');
        $Program->h16 = $request->input('h164');
        $Program->h18 = $request->input('h184');
        $Program->h20 = $request->input('h204');
        $Program->week="3";
        $Program->save();
        $Program = new Program();
        $Program->product_id = $request->input('product_id');
        $Program->day_number = 4;
        $Program->day = $request->input('day5');
        $Program->h10 = $request->input('h105');
        $Program->h12 = $request->input('h125');
        $Program->h14 = $request->input('h145');
        $Program->h16 = $request->input('h165');
        $Program->h18 = $request->input('h185');
        $Program->h20 = $request->input('h205');
        $Program->week="3";
        $Program->save();
        $Program = new Program();
        $Program->product_id = $request->input('product_id');
        $Program->day_number = 5;
        $Program->day = $request->input('day6');
        $Program->h10 = $request->input('h106');
        $Program->h12 = $request->input('h126');
        $Program->h14 = $request->input('h146');
        $Program->h16 = $request->input('h166');
        $Program->h18 = $request->input('h186');
        $Program->h20 = $request->input('h206');
        $Program->week="3";
        $Program->save();
        $Program = new Program();
        $Program->product_id = $request->input('product_id');
        $Program->day_number = 6;
        $Program->day = $request->input('day7');
        $Program->h10 = $request->input('h107');
        $Program->h12 = $request->input('h127');
        $Program->h14 = $request->input('h147');
        $Program->h16 = $request->input('h167');
        $Program->h18 = $request->input('h187');
        $Program->h20 = $request->input('h207');
        $Program->week="3";
        $Program->save();
        return back()->withInput();
    }
    public function ProductProgramAdd4(Request $request){
        session_start();
        if (isset($_SESSION["admin_id"])){

        }else{
            return redirect(url("/adminSecret/login"));
        }
        $Program = Program::where("product_id",$request->input('product_id'))->where("week","4");
        $Program->delete();
        $Program = new Program();
        $Program->product_id = $request->input('product_id');
        $Program->day_number = 0;
        $Program->day = $request->input('day1');
        $Program->h10 = $request->input('h101');
        $Program->h12 = $request->input('h121');
        $Program->h14 = $request->input('h141');
        $Program->h16 = $request->input('h161');
        $Program->h18 = $request->input('h181');
        $Program->h20 = $request->input('h201');
        $Program->week="4";
        $Program->save();
        $Program = new Program();
        $Program->product_id = $request->input('product_id');
        $Program->day_number = 1;
        $Program->day = $request->input('day2');
        $Program->h10 = $request->input('h102');
        $Program->h12 = $request->input('h122');
        $Program->h14 = $request->input('h142');
        $Program->h16 = $request->input('h162');
        $Program->h18 = $request->input('h182');
        $Program->h20 = $request->input('h202');
        $Program->week="4";
        $Program->save();
        $Program = new Program();
        $Program->product_id = $request->input('product_id');
        $Program->day_number =2;
        $Program->day = $request->input('day3');
        $Program->h10 = $request->input('h103');
        $Program->h12 = $request->input('h123');
        $Program->h14 = $request->input('h143');
        $Program->h16 = $request->input('h163');
        $Program->h18 = $request->input('h183');
        $Program->h20 = $request->input('h203');
        $Program->week="4";
        $Program->save();
        $Program = new Program();
        $Program->product_id = $request->input('product_id');
        $Program->day_number = 3;
        $Program->day = $request->input('day4');
        $Program->h10 = $request->input('h104');
        $Program->h12 = $request->input('h124');
        $Program->h14 = $request->input('h144');
        $Program->h16 = $request->input('h164');
        $Program->h18 = $request->input('h184');
        $Program->h20 = $request->input('h204');
        $Program->week="4";
        $Program->save();
        $Program = new Program();
        $Program->product_id = $request->input('product_id');
        $Program->day_number = 4;
        $Program->day = $request->input('day5');
        $Program->h10 = $request->input('h105');
        $Program->h12 = $request->input('h125');
        $Program->h14 = $request->input('h145');
        $Program->h16 = $request->input('h165');
        $Program->h18 = $request->input('h185');
        $Program->h20 = $request->input('h205');
        $Program->week="4";
        $Program->save();
        $Program = new Program();
        $Program->product_id = $request->input('product_id');
        $Program->day_number = 5;
        $Program->day = $request->input('day6');
        $Program->h10 = $request->input('h106');
        $Program->h12 = $request->input('h126');
        $Program->h14 = $request->input('h146');
        $Program->h16 = $request->input('h166');
        $Program->h18 = $request->input('h186');
        $Program->h20 = $request->input('h206');
        $Program->week="4";
        $Program->save();
        $Program = new Program();
        $Program->product_id = $request->input('product_id');
        $Program->day_number = 6;
        $Program->day = $request->input('day7');
        $Program->h10 = $request->input('h107');
        $Program->h12 = $request->input('h127');
        $Program->h14 = $request->input('h147');
        $Program->h16 = $request->input('h167');
        $Program->h18 = $request->input('h187');
        $Program->h20 = $request->input('h207');
        $Program->week="4";
        $Program->save();
        return back()->withInput();
    }
    public function ProductUserList($id){
        session_start();
        if (isset($_SESSION["admin_id"]) || isset($_SESSION["teacher_id"])){

        }else{
            return redirect(url("/adminSecret/login"));
        }
        $users = Cart::join("users","carts.user_id","=","users.id")->where("carts.product_id",$id)->where("carts.verify","1")->get(['carts.id AS cart_id', 'users.*']);
        return view('admin.ProductUserList')->with("users",$users);
    }



    public function addClass(Request $request){
        session_start();
        if (isset($_SESSION["admin_id"])){

        }else{
            return redirect(url("/adminSecret/login"));
        }
        $PRODUCT = new Classweek();
        $PRODUCT->name = $request->input('name');
        $PRODUCT->teacher = $request->input('teacher');
        $PRODUCT->start_date = $request->input('startDate');
        $PRODUCT->start_time = $request->input('startTime');
        $PRODUCT->lat = $request->input('lat');
        $PRODUCT->long = $request->input('long');
        $PRODUCT->capacity = $request->input('capacity');
        $PRODUCT->count_session = $request->input('count');
        $filei= $request->file('image');
        if(isset($filei))
            if ($filei->isValid()) {
                $PRODUCT->img=$filei->getClientOriginalExtension();
            }
        $PRODUCT->save();
        $LastProduct=Classweek::orderBy('created_at', 'desc')->first();
        if(isset($filei))
            if ($filei->isValid()) {
                $file=$LastProduct->id.".".$filei->getClientOriginalExtension();
                $filei->move('content/class', $file);
            }
        return back()->withInput();
    }
    public function classList(){
        session_start();
        if (isset($_SESSION["admin_id"]) || isset($_SESSION["teacher_id"])){

        }else{
            return redirect(url("/adminSecret/login"));
        }
        $products = Classweek::all();
        return view('admin.classList')->with('products', $products);
    }

    public function deleteClass($id){
        $Product = Classweek::find($id);
        $Product->delete();
        return back();
    }
}
