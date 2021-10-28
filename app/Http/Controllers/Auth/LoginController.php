<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Laravel\Socialite\Facades\Socialite;

use App\Models\User;
use Illuminate\Support\Facades\Validator;

class loginController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function authentication(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email'=>['required','string','email:rfc,dns','max:255','ends_with:@gmail.com'],
            'password'=>['required','max:15','min:8'],
        ],
        [
        'email.required' => 'We need to know your email !',
        'email.max'=>' Email must be less than 50 characters !',
        'email.email' => 'Email must be in the correct format : example@gmail.com ',
        'password.required' => 'Password not null !',
        'password.max'=>'Password must be less than 15 characters !',
        'password.min'=>'Password must be more than 8 characters'
        ]);

        if ($validator->fails()) {
            return redirect('/auth/login')
            ->withErrors($validator)
            ->withInput();
            }
        if($request->get('remember')){
            $remember=true;
        }else{
            $remember=false;
        }
        $validated = $validator->validated();
        if (Auth::attempt($validated,$remember)) {
            $request->session()->regenerate();
            return redirect()->intended('home');
        }
        return back();

    }

    public function logout(Request $request)
    {

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('auth.login');
    }
}