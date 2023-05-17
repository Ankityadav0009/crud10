<?php

namespace App\Http\Controllers;
use App\Models\crudmodel;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function crud (){
        $data=crudmodel::all();
        
        $datas=compact('data');
        // print_r ($datas);
        // die;
        
        return view('auth/crud')->with($datas);
        // return view("auth.crud");
    }
    public function delete ($id){
        $data=crudmodel::find($id)->delete();
        // echo $data;
        // die;
return redirect()->back();
        
    }
    public function update ($id){
        $data=crudmodel::find($id);
        if(is_null($data)){
            return redirect()->back();

        }else{
            $url=url('/updatedata')."/".$id;
            $title="update User";
            $datas=compact('data','url','title');
            return view('create')->with($datas);
        }
        
    }
    public function registerUser1 (Request  $request){
        // return view("auth.crud");
         // return "value posted";
        
        // echo $request;
        // die;
        $request-> validate([
            'name'=>'required',
        'age'=>'required ',
        'city'=>'required'
        ]);
        // print_r ($request);
        $user=new crudmodel();
        // print_r ($user);
        $user->name=$request->name;
        $user->age=$request->age;
        $user->city=$request->city;
        $res =$user->save();
        if($res){
             
             return redirect('crud');

        }else{
            return back()->with('fail','somthing went wrong');
        }
    }
    public function add (){
        $url=url('/register-user1');
        $title="Add User";
        $data=compact('url','title');
        return view("create")->with($data);
    }
    public function updatedata ($id,Request $request){
        $data=crudmodel::find($id);
        $data->name=$request->name;
        $data->age=$request->age;
        $data->city=$request->city;
        $data->save();
        return redirect('crud');
    
    }
  
}
