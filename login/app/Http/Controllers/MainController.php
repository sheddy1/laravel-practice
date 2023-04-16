<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    function login(){
        return view('auth1.login');
    }

    function register(){
        return view('auth1.register');
    }

    function save(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:admins',
            'password'=>'required|min:5|max:12'
        ]);

        //inserting the data
        $admin = new users;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->position = 1;
        $save = $admin->save();

        if($save){
            return back()->with('success', 'New user has been inserted into db');
        }
        else{
            return back()->with('fail','Something went wrong try again oh');
        }
    }

    function check(Request $request){
        // return $request->input();

        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);

        $userinfo = Admin::where('email', '=', $request->email)->first();

        if(!$userinfo){
            return back()->with('fail','email not recognised');
        }
        else{
            if(Hash::check($request->password, $userinfo->password)){
                $request->session()->put('LoggedUser', $userinfo->id);
                return redirect('dashboard');
            }
            else{
                return back()->with('fail','incorrect password');
            }
        }
    }

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('login1');
        }
    }

    function dashboard(){
        $data = ['LoggedUserInfo'=>Admin::where('id', '=', session('LoggedUser'))->first()];
        return view('admin.dashboard', $data );
    }

}
