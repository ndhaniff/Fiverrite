<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Socialite;

class ProfileController extends Controller
{
    public function index(){
        $getUser = auth()->user();
        //get last login
        $to_time = strtotime(date('g:i:s'));
        $from_time = strtotime($getUser->last_login);
        $last_login =  round(abs($to_time - $from_time) / 60,0). " minutes ago";
        $current_user = User::find($getUser->id);

        $user = [
            'name' => $getUser->name,
            'last_login' =>$last_login,
            'avatar' => $getUser->avatar,
            'description' => $getUser->description,
            'role' => $current_user->role->name,
            'address' => $current_user->getDetails->street_address,
            'country' => $current_user->getDetails->country,
            'services' => $current_user->services
        ];

        return view('auth.profiles.profile')->with('user',$user);
    }
}
