<?php

namespace App\Http\Controllers;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    
    public function home(){
        return view("home");
    }
     public function redirects(){
       $usertype=Auth::user()->usertype;
       if($usertype=='1'){
         return view('admin.adminhome');
       }
       else{
        return view('home');
       }
    }
    public function category(){
    
      return view('admin.category');
    }
    public function addcategory(Request $request){
      $add=category::create([
        'name'=>$request->name,
     ]);
     return response()->json([
      'success'=>'Register successfull',
     ]);
    }
    public function showdata($id){
      $categories=category::all();
      return response()->json([
      'categories'=>$categories,
      ]);
    }
}
