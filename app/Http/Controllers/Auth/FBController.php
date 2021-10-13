<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Log;



class FBController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleCallback()
    {
        dd(1);
        try {

            $user = Socialite::driver('facebook')->user();

            $finduser = User::where('facebook_id', $user->id)->first();

            if($finduser){

                Auth::login($finduser);
                return redirect('/frontend/home');

            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'facebook_id'=> $user->id,
                    'provider_name'=>'facebook',
                    'password' => bcrypt('my-facebook')
                ]);

                Auth::login($newUser);
                return redirect('/frontend/home');
            }

        } catch (\Exception $ex) {
            Log::error('FBController Error: '. $ex -> getMessage());
        }

    }
}