<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Seller
{

    public function handle(Request $request, Closure $next)
    {
        if(!Auth::guard('seller')->check()){
//            return redirect()->route('login_form')->with('error','Plz Login First');
            $notification=array('message' => 'Plz Login First!', 'alert-type' => 'error');
            return redirect()->route('seller_login_form')->with($notification);
        }
        return $next($request);
    }
}
