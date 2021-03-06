<?php

namespace App\Http\Controllers;

use App\Models\User;
use Socialite;
use Auth;

use Illuminate\Http\Request;

class OAuthController extends Controller
{
    public function redirect($provider)
    {
        config(['services.google.redirect' => url(env('GOOGLE_REDIRECT'))]);
        return Socialite::driver($provider)->redirect();
    }

    public function Callback($provider)
    {
        config(['services.google.redirect' => url(env('GOOGLE_REDIRECT'))]);
        $userSocial =   Socialite::driver($provider)->user();
        $users      =   User::where(['email' => $userSocial->getEmail()])->first();
       
        if($users){
            Auth::login($users, true);
            return redirect('/');
        } else {
            $user = User::create([
                'name'          => $userSocial->getName(),
                'email'         => $userSocial->getEmail(),
                'dp'            => 'default.png',
                'provider_id'   => $userSocial->getId(),
                'provider'      => $provider,
                'status'        => 'active',
                'email_verified_at'      => date('y-m-d h:m:s'),
            ]);
            Auth::login($user, true);
            return redirect()->route('home');
        }
    }
}
