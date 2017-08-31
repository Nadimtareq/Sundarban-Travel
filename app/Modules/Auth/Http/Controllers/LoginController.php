<?php

namespace App\Modules\Auth\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

class LoginController extends Controller
{
     public function create (){
     	return view ('auth.login');
     }

     public function login(Request $request)
    {
       Sentinel::authenticate($request->all());
        return Sentinel::check();


       //dd($request->all());
    }

    public function logout () {
    	Sentinel::logout();
    	return redirect ('/login');
    }
}
