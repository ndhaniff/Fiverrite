<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\User;
use Socialite;
use Auth;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }


    public function handleProviderCallback()
    {
        $userSocial = Socialite::driver('facebook')->user();

        $profile = [
            "name" => $userSocial->name,
            "email" => $userSocial->getEmail(),
            "avatar" => $userSocial->getAvatar(),
            "token" => $userSocial->token,
            'provider' => 'facebook'
        ];

        $findUser = User::where('email',$userSocial->email)->first();

        if($findUser ){
            //login normally
            Auth::login($findUser);
            $findUser->last_login = date('g:i:s');
            $findUser->save();
            return redirect('/')->with('success','Logged In');
        }
        else {
        $user = new User;
            $user->name = $profile['name'];
            $user->email = $profile['email'];
            $user->password = $userSocial->token;
            $user->avatar = $profile['avatar'];
            $user->provider = $profile['provider'];
            $user->provider_id = $profile['token'];
            $user->last_login = date('g:i:s');
            $user->description = 'I have not update my profile yet feel free to contact me if you have any question';
            $user->save();
        //return 'successfull login';
             Auth::login($user);
             return redirect('/')->with('success','Account Created');
        }

    }
}
