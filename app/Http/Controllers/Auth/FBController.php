<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class FBController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookSignin($provider)
    {
        try {

            $user = Socialite::driver($provider)->user();
            $facebookId = User::where('provider_id', $user->id)->first();

            if($facebookId){
                Auth::login($facebookId);
                return redirect('/');
            }else{
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'facebook_id' => $user->id,
                ]);

                Auth::login($createUser);
                return redirect('/');
            }

        } catch (\Exception $exception) {
            dd($exception->getMessage());
        }
    }
}