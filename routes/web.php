<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\SocialController;
use App\Http\Middleware\Login_check;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('front.index');
})->name('index');

Route::middleware([Login_check::class])->group(function () {
    Route::get('/category/questions', function () {
        return view('front.questions');
    })->name('questions');
});

Route::prefix('study_partner')->group(function () {
    Route::get('/login', function () {
        return view('authantication.login');
    })->name('login');
    Route::get('/forgate', function () {
        return view('authantication.forgate');
    })->name('forgate');

    Route::post('forgate_check',[RegisterController::class,'forgate_password'])->name('forgate_check');

    Route::get('/register', function () {
        return view('authantication.register');
    })->name('register');

    // checj
    Route::get('/gautam',function(){
        return view('authantication.email');
    });

    Route::get('/forget_password', function () {
        return view('authantication.register');
    })->name('register');

    Route::post('/register_save/{role}', [RegisterController::class, 'store'])->name('register_save');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    Route::post('/login_check', [LoginController::class, 'store'])->name('login_check');
    // google login controller 
    Route::get('/google/redirect', [SocialController::class, 'redirecttoGoogle'])->name('google.redirect');
    Route::get('/google/callback', [SocialController::class, 'handleGooglecallback'])->name('google.callback');
});
