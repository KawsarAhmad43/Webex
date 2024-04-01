<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm(){
        return view('auth.registration');
    }


    public function register(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = new User();
        $user->name = "Account_name";
        $user->email = "example@gmail.com";
        $user->gender = null;
        $user->dob = null;
        $user->address = null;
        $user->phone = null;
        $user->profile_picture = 'default/user.png'; 
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('wallet')->with('success', 'Registration successful. You can now log in.');

    }
}