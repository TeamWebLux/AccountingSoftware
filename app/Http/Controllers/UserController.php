<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user = User::all();
        $url="All Users";
        $data=compact('user','url');
        return view('showusers')->with($data);
    }
    public function create_user(){
        $url=url('/userAdd');
        $tittle='Create User';
        $role=Role::all();
        $data=compact('role','url','tittle');
        return view('create_user')->with($data);
    }
    public function storeUserData (Request $request){
        // print_r($_POST);
        $user=new Users;
        $user->name=$request['name'];
        $user->username=$request['username'];
        $user->email=$request['email'];
        $user->contact=$request['phone'];
        $user->password=md5($request['password']);
        $user->role=$request['role'];
        $user->status=0;
        $user->save();
       return redirect('/user');

    }
    public function coustom($name){

        $user = Users::where('role',$name)->get();
        $url="List Of ".$name;
        $data=compact('user','url');
        return view('showusers')->with($data);

    }
}
