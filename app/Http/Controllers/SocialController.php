<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SocialController extends Controller
{
    public function redirecttoGoogle()
    {
        // dd(Socialite::driver('google')->user());
        return Socialite::driver('google')->redirect();
    }

    public function handleGooglecallback()
    {
        $googleuser = Socialite::driver('google')->user();
        $useremail =    $googleuser->email;
        $user = User::where('email', $useremail)->first();
        if ($user) {
            Auth::login($user);
            return redirect()->route('index');
        } else {
            $user_register =  User::create([
                'name' => $googleuser->name,
                'email' =>  $googleuser->email,
                'password' => Hash::make("gautam@1452"),
                'role' => "user"
            ]);
            if ($user_register) {
                Auth::login($user_register);
                return redirect()->route('index');
            } else {
                return redirect()->back()->withErrors(['error' => 'Registration failed.']);
            }
        }
    }
}
