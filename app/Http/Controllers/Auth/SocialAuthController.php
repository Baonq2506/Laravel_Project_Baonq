<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Request;
class SocialAuthController extends Controller
{
    public function getGoogleSignInUrl()
    {
        try {
            $url = Socialite::driver('google')->redirect()->getTargetUrl();
            return response()->json([
                'url' => $url,
            ]);
        } catch (\Exception $exception) {
            return $exception;
        }
    }

    public function loginCallback(Request $request)
    {
        try {
            $state = $request->input('state');

            parse_str($state, $result);
            $googleUser = Socialite::driver('google')->user();

            $user = User::where('email', $googleUser->email)->first();
            if ($user) {
                throw new \Exception(__('google sign in email existed'));
            }
            $user = User::create(
                [
                    'email' => $googleUser->email,
                    'name' => $googleUser->name,
                    'google_id'=> $googleUser->id,
                    'provider_name'=>'google',
                ]
            );
            return response()->json([
                'status' => __('google sign in successful'),
                'data' => $user,
            ]);

        } catch (\Exception $exception) {
            return response()->json([
                'status' => __('google sign in failed'),
                'error' => $exception,
                'message' => $exception->getMessage()
            ]);
        }
    }
}
