<?php

use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\EmailVerificationNotificationController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RgController;
use App\Http\Controllers\RPController;
use App\Http\Controllers\UserProduct;
use App\Http\Controllers\VerifyEmailController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::middleware('guest')->group(function () {
    Route::get('/register', [RgController::class, 'create'])
        ->name('register');

    Route::post('/register', [RgController::class, 'store']);

    Route::get('/login', [LoginController::class, 'create'])
        ->name('login');

    Route::post('/login', [LoginController::class, 'store']);

    Route::get('/forgot-password', [ForgotPasswordController::class, 'create'])
        ->name('password.request');

    Route::post('/forgot-password', [ForgotPasswordController::class, 'store'])
        ->name('password.email');

    Route::get('/reset-password', [RPController::class, 'create'])
        ->name('password.reset');

    Route::post('/reset-password', [RPController::class, 'store'])
        ->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'destroy'])
        ->name('logout');

    Route::get('/email/verify', [EmailVerificationPromptController::class, '__invoke'])
        ->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
        ->middleware('signed')
        ->name('verification.verify');

    Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, '__invoke'])
        ->name('verification.send');

    Route::view('/home', 'home')->middleware('verified')
        ->name('dashboard');

    Route::view('/profile', 'profile')
        ->middleware(['verified', 'password.confirm'])
        ->name('profile');

    Route::get('/confirm-password', [PasswordConfirmationController::class, 'show'])
        ->name('password.confirm');

    Route::post('/confirm-password', [PasswordConfirmationController::class, 'store']);

    Route::view('kabinet', 'auth.kabinet')->middleware('verified')
        ->name('kabinet');

    Route::view('zakazlar', 'auth.inc.zakaz')->middleware('verified')
        ->name('zakazlar');

    Route::get('/mahsulot', [UserProduct::class,'create'])->middleware('verified')->name('mahsulot');

    Route::post('/mahsulot', [UserProduct::class,'addproduct'])->middleware('verified');

    Route::post('/mahsulot/{id}', [UserProduct::class,'proddelete'])->middleware('verified')->name('proddelete');

    Route::get('/mahsulot/{id}/edit', [UserProduct::class,'prodedit'])->middleware('verified')->name('edit');

    Route::post('/mahsulot/{id}/save', [UserProduct::class,'prodeditSave'])->middleware('verified')->name('prodeditSave');

    Route::post('/trash/{id}', [UserProduct::class,'prodreturn'])->middleware('verified')->name('prodreturn');
    
    Route::get('/trash', [UserProduct::class, 'trash'])->middleware('verified')->name('trash');

    Route::get('/search', [UserProduct::class, 'search'])->middleware('verified')->name('search');

    Route::get('/searchTrash', [UserProduct::class, 'searchTrash'])->middleware('verified')->name('searchTrash');

    Route::get('/profil', [ProfileController::class, 'index'])->middleware('verified')
        ->name('profil');

        Route::post('/profil', [ProfileController::class, 'store'])->middleware('verified');

    Route::view('oluvchi', 'auth.inc.oluvchi')->middleware('verified')
        ->name('oluvchi');

    Route::view('bozor', 'auth.inc.bozor')->middleware('verified')
        ->name('bozor');

    Route::view('narxlar', 'auth.inc.narxlar')->middleware('verified')
        ->name('narxlar');

    Route::view('yordam', 'auth.inc.yordam')->middleware('verified')
        ->name('yordam');

    Route::view('komp', 'auth.inc.komp')->middleware('verified')
        ->name('komp');

    Route::view('sozlama', 'auth.inc.sozlama')->middleware('verified')
        ->name('sozlama');

});
