<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function __construct(){
        $this->middleware('guest');
    }

    public function index(){
        return view('admin.register');
    }
    
    public function register(Request $request){
        $request->validate([
            'name' => 'required|min:7',
            'username' => 'required|min:5',
            'password' => 'required|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' =>$request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('notes.index');

    }

}
