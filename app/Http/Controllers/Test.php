<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Admin;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Test extends Controller
{
    public function index(){
        return view('index');
    }
    public function about(){
        return view('about');
    }
    public function product(){
        $obj = Products::all();
       return view("product",with(["std"=>$obj]));
    }
    public function contact(){
        return view('contact');
    }
    public function cart(){
        return view('cart');
    }
    public function sign_up(){
        return view('sign_up');
    }
    public function ins_sign_up(Request $r){
       $role = $r -> role;
      $n =   $r -> name;
       $e =  $r -> email;
      $p =   $r -> password;

      $obj = new User();
      $obj -> name = $n;
      $obj -> email = $e;
      $obj -> password = $p;
      $obj -> role = $role;
      $obj -> save();
      return redirect('/login');
    }

    public function login(){
        return view('login');
    }

    public function check_login(Request $request)
    {
        $e = $request->email;
        $p = $request->pass;
        $role = $request->role;

        // Debugging: Check if the values are being received correctly
        // dd($e, $p, $role);

        if (Auth::attempt(["email" => $e, "password" => $p, "role" => $role])) {
            return redirect(url('/'));
        } else {
            return redirect(url('/login'))->with('Error', "Invalid Email or Password");
        }
    }

    public function admin_login(){
        return view('admin_login');
    }
    public function admin_login_check(Request $r){
        $e = $r -> email;
        $p = $r -> pass;
        $role = $r -> role;
        if(Auth::attempt(["email"=>$e, "password"=>$p , "role"=>$role])){
            return redirect(url('/admin_pannel'));
        } else {
            return redirect(url('/admin_login'))->with('Error',"Invalid Email or Password");
        }
    }

    public function logout(){
        Auth::logout();
        return redirect(url('/'));
    }

    public function admin_pannel(){
        return view('admin_pannel');
    }
}
