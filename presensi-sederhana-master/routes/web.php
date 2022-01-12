<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;



Route::get('/', function () {
    return view('welcome');
});


route::get('/login',[LoginController::class,'halamanLogin'])->name('login');
route::post('/postlogin',[LoginController::class,'postLogin'])->name('postlogin');
route::get('/logout',[LoginController::class,'Logout'])->name('logout');

Route::group(['middleware' => ['auth', 'ceklevel:admin,karyawan']], function (){
    route::get('/home',[HomeController::class,'index'])->name('home');
});