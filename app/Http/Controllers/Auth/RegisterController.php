<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function create()
    {

        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:30','regex:/^[a-zA-Z]+$/'],
            'email' => ['required','unique:users','string','email:rfc,dns','max:30','ends_with:@gmail.com'],
            'password' => ['required','confirmed','max:15','min:8'],
        ], [
            'email.required' => 'We need to know your email !',
            'email.max'=>' Email must be less than 30 characters !',
            'email.email' => 'Email must be in the correct format : example@gmail.com ',
            'name.regex' => 'Name does not characters and numbers',
            'name.required' => 'We need to know your name !',
            'name.max' => ' Name must be less than 30 characters !',
            'name.email' => 'Email must be in the correct format : example@gmail.com ',
            'password.required' => 'Password not null !',
            'password.max' => 'Password must be less than 15 characters !',
            'password.min' => 'Password must be more than 8 characters',
            'password.confirmed' =>'Password do not match',
        ]);
        if ($validator->fails()) {
            return redirect('auth/register')
                ->withErrors($validator)
                ->withInput();
        }
        $validated = $validator->validated();
        $user = new User();
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = bcrypt($validated['password']);
        $user->save();
        $user->roles()->sync(4);
        return redirect('auth/login');
    }
}