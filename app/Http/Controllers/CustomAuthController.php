<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Hash;
use Session;

class CustomAuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }

     public function registration(){
        return view("auth.registration");
    }
    public function registerUser(Request $request){
        // return "value posted";
        
        // echo $request;
        $request-> validate([
            'name'=>'required',
        'email'=>'required|email|unique:users',
        'password'=>'required|min:5|max:12'
        ]);
        // print_r ($request);
        $user=new User();
        // print_r ($user);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $res =$user->save();
        if($res){
            return back()->with('success','you have registerd successfully ');
        }else{
            return back()->with('fail','somthing went wrong');
        }
    }
    public function loginUser(Request $request){
        $request-> validate([
        'email'=>'required|email',
        'password'=>'required|min:5|max:120'
        ]);
$user = User::where('email','=',$request->email)->first();
        if($user){
                if(Hash::check($request->password,$user->password)){
                    $request->session()->put('loginId',$user->id);
                    return redirect('dashboard');
                }else{
                    return back()->with('fail','password does not match');
                }
                
        }else{
            return back()->with('fail','email is not register');
        }
    }
    public function dashboard(){
        $data=array();
        if(Session::has('loginId')){
            $data=User::where('id','=',Session::get('loginId'))->first();
        }
        return view('dashboard',compact('data'));
    }
    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }
}
