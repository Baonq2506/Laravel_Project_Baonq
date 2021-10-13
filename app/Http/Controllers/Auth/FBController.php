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

    public function facebookSignin()
    {

        try {
            $user = Socialite::driver('facebook')->user();
        } catch (\Exception $e) {
            return $this->sendFailedResponse($e->getMessage());
        }

        try {
            $facebookId = User::where('facebook_id', $user->id)->first();

            if($facebookId){
                Auth::login($facebookId);
                return redirect('/frontend/home');
            }else{
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'provider_name'=>'facebook',
                    'facebook_id' => $user->id,
                ]);

            }
            Auth::login($createUser);
            return redirect('/frontend/home');
        } catch (\Exception $ex) {
            Log::error('FBController Error: '. $ex -> getMessage());
        }


    }
}
