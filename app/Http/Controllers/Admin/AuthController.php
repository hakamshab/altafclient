<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Redirect;


class AuthController extends Controller
{
    public function loginview()
    {
        return view('admin/login');
    }
    public function customLogin(Request $request)
    {
        $check = DB::table('users')
                ->where('email',$request->email)
                ->where('password',$request->password)
                ->first();

                if($check){

                    return redirect('user');

                }else{

                  return Redirect::back()->withErrors(['msg' => 'Incorrect Email And password']);

                }
  
    }
    public function dashboard()
    {

        if(Auth::check()){
            return view('welcome');
        }
  
        return redirect("admin")->withSuccess('You are not allowed to access');
    }
    

    public function signOut() {
        Session::flush();
        Auth::logout();
        // return "dsds";
  
        return Redirect('admin');
    }
}
