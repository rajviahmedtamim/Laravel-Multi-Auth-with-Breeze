<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SellerController extends Controller
{
    public function index(){
        $notification=array('message' => 'Plz Login First!', 'alert-type' => 'error');
        return view('seller.seller_login')->with($notification);
    }
    public function sellerDashboard(){
        return view('seller.index');
    }
    public function login(Request $request){
//        dd($request->all());
        $check = $request->all();
        if(Auth::guard('seller')->attempt(['email' =>$check['email'], 'password' =>$check['password']])) {
            return redirect()->route('seller.dashboard')->with(array('message' => 'Seller Login Successfully!', 'alert-type' => 'success'));
        }else{
//            return redirect()->route('admin.dashboard')->with(array('message' => 'Username and password incorrect!', 'alert-type' => 'danger'));
            return back()->with('error','Invalid username or password.');
        }
    }

    public function sellerLogout() {
        Auth::guard('seller')->logout();
        return redirect()->route('seller_login_form')->with(array('message' => 'Seller Logout Successfully!', 'alert-type' => 'success'));

    }

    public function sellerRegister(){
        return view('seller.seller_register');
    }
    public function sellerRegisterCreate(Request $request){
        Seller::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now(),
        ]);
        return redirect()->route('seller_login_form')->with(array('message' => 'Seller Created Successfully!', 'alert-type' => 'success'));

    }
}
