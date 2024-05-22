<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthLoginController;
use Illuminate\Support\Facades\Auth;


Route::get('/login', [AuthLoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthLoginController::class, 'login']);
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');


Route::get('/register', function () {
})->name('register');

Route::post('/register', function () {
});

Route::get('/password/reset', function () {
})->name('password.request');

Route::post('/password/email', function () {
})->name('password.email');

Route::get('/password/reset/{token}', function () {
})->name('password.reset');

Route::post('/password/reset', function () {
});

