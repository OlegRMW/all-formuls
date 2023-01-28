<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function login(Request $request){

        $request->validate([
            'name'=>'string',
            'password'=>'string'
        ]);

        $name = $request->input('name');
        $password = $request->input('password'); 

        $user = User::where('name','=',$name)->get();

        if (isset($user)){
           if($user->password = $password){

                $request->session()->put('status',True);
                $request->session()->put('user_id', $user[0]->id);
                $request->session()->put('user_name', $user[0]->name);

                return view("pages.index");

           }
           else{
            return redirect()->route('page.log');
           }
        }
    }
    public function regist(Request $request){       

        $request->validate([
            'name'=>'string',
            'password'=>'string'
        ]);

        $name = $request->input('name');
        $password = $request->input('password'); 

        $user = new User;
        $user->name = $name;
        $user->password = $password;
        $user->save();
        
        return redirect()->route('page.index');
    }
    public function logout(){
        session(['status'=>False]);
        session(['user_id'=>null]);
        session(['user_name'=>null]);
        return view('pages.index');
    }
   
}
