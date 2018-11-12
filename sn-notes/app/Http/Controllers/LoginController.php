<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $redirectTo = '/';

    public function __construct(){
        $this->middleware('guest')->except(['logout']);
    }
    
    public function index(){

        return view('admin.login');
    }
    
    public function login(Request $request){

        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if( auth()->attempt(request(['username', 'password']) ) ) {
            return redirect()->home();
        }
        else{
            return back()->withErrors([
                'message' => 'Please check your credentials'
            ]);
        }
    }
    
    public function logout(){

        Auth::logout();
        return redirect()->home();
    }
}
