<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    public function redirectToProvider($provider)
    {
        if (!Session::has('pre_url')) {
            Session::put('pre_url', URL::previous());
        } else {
            if (URL::previous() != URL::to('auth/login')) {
                Session::put('pre_url', URL::previous());
            }

        }

        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();

        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);
        // dd($authUser);
        return Redirect()->route('home');
    }
    public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('provider_id', $user->id)->first();
        if ($authUser) {
            return $authUser;
        }
        return User::create([
            'name' => $user->name,
            'email' => $user->email,
            'provider_name' => $provider,
            'provider_id' => $user->id,
        ]);
    }

    public function redirect($providers)
    {
        return Socialite::driver($providers)->redirect();
    }
    public function callback($providers)
    {
        $getInfo = Socialite::driver($providers)->user();
        $user = $this->createUser($getInfo, $providers);
        auth()->login($user);
        return redirect()->route('home');
    }
    public function createUser($getInfo, $providers)
    {
        $user = User::where('provider_id', $getInfo->id)->first();
        if (!$user) {
            $user = User::create([
                'name' => $getInfo->name,
                'email' => $getInfo->email,
                'provider_name' => $providers,
                'provider_id' => $getInfo->id,
            ]);
        }
        return $user;
    }
}
