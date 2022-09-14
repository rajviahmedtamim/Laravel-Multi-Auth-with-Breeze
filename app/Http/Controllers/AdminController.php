<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function index(){
//        return view('admin.admin_login');
        $notification=array('message' => 'Plz Login First!', 'alert-type' => 'error');
        return view('admin.admin_login')->with($notification);
    }
    public function dashboard(){
        return view('admin.index');
    }
    public function login(Request $request){
//        dd($request->all());
        $check = $request->all();
        if(Auth::guard('admin')->attempt(['email' =>$check['email'], 'password' =>$check['password']])) {
            return redirect()->route('admin.dashboard')->with(array('message' => 'Admin Login Successfully!', 'alert-type' => 'success'));
        }else{
//            return redirect()->route('admin.dashboard')->with(array('message' => 'Username and password incorrect!', 'alert-type' => 'danger'));
            return back()->with('error','Invalid username or password.');
        }
    }

    public function adminLogout() {
        Auth::guard('admin')->logout();
        return redirect()->route('login_form')->with(array('message' => 'Admin Logout Successfully!', 'alert-type' => 'success'));

    }

    public function adminRegister(){
        return view('admin.admin_register');
    }
    public function adminRegisterCreate(Request $request){
//        dd($request->all());
//        $request->validate([
//            'name' => ['required','string','min:3','max:50'],
//            'email' => ['required', 'email', 'max:255', 'unique:admins'],
//            'password' => ['required', 'confirmed'],
//        ]);
        Admin::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now(),
            ]);
        return redirect()->route('login_form')->with(array('message' => 'Admin Created Successfully!', 'alert-type' => 'success'));

    }
}


