<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    public function getGoogleSignInUrl()
    {
        return Socialite::driver('google')->redirect();
    }

    public function loginCallback(Request $request)
    {

        $googleUser = Socialite::driver('google')->user();

        $user = User::where('google_id', $googleUser->id)->first();
        if (!empty($user)) {
            Auth::login($user);
            return redirect()->route('home');
        } else {
            $user = User::create(
                [
                    'email' => $googleUser->email,
                    'name' => $googleUser->name,
                    'google_id' => $googleUser->id,
                    'provider_name' => 'google',
                ]
            );
        }
        Auth::login($user);
        return redirect()->route('home');
    }
}