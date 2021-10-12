<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Laravel\Socialite\Facades\Socialite;

use App\Models\User;
class loginController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function authentication(Request $request)
    {
        $auth = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if($request->get('remember')){
            $remember=true;
        }else{
            $remember=false;
        }

        if (Auth::attempt($auth,$remember)) {
            $request->session()->regenerate();
            return redirect()->intended('frontend/home');
        }
        return back()->withErrors(
            [
                'email' => "EMail or Password Failed",
            ]);
    }
    public function logout(Request $request)
    {

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('auth.login');
    }
}