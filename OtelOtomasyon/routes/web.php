<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\ForgetPasswordManager;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if (!Auth::check()) {
        return redirect(route('login'));
    }
    return view('index');
})->name('home');

Route::get('/welcome', function (){
    return view('welcome');
});

Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::get('/registration', [AuthManager::class, 'registration'])->name('registration');
Route::get('/logout', [AuthManager::class, 'logOut'])->name('logout');
Route::get('/forget-password', [ForgetPasswordManager::class,'forgetPassword'])->name('forget-password');
Route::get('/reset-password/{token}', [ForgetPasswordManager::class, 'resetPassword'])->name('reset-password');


Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::post('/registration', [AuthManager::class, 'registrationPost'])->name('registration.post');
Route::post('/forget-password', [ForgetPasswordManager::class,'forgetPasswordPost'])->name('forget-password.post');
Route::post('/reset-password', [ForgetPasswordManager::class, 'resetPasswordPost'])->name('reset-password.post');

Route::group(['middleware' => 'auth'], function (){
    Route::get('/profile', function () {
        return "hi";
    });
});








