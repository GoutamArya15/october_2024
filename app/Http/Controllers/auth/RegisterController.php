<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Mail\Forgate_password;
use App\Mail\password_email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $role)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|max:6|same:confirm_password',
            'confirm_password' => 'required|max:6',
        ]);

        $user_register =  User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'condition' => $request->condition,
            'role' => $role
        ]);
        if ($user_register) {
            Auth::login($user_register);
            return redirect()->route('index');
        } else {
            return redirect()->back()->withErrors(['error' => 'Registration failed.']);
        }
    }
    public function forgate_password(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users'
        ]);

        $email = $request->email;
        $username = DB::table('users')->where('email',$email)->value('name');
        $data = [
            'username' => $username
        ];
        Mail::to($email)->send(new Forgate_password($data));
        return redirect()->route('login')->with(['success','please check email then login coreect password']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // 
    }
}
