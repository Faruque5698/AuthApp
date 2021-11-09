<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\EmailController;

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
    return view('welcome');
});

Route::get('/private',[HomeController::class,"private"]);

Route::get('/dashboard', [HomeController::class,"index"])->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';

//Route for mailing

//Route::get('/emails', function (){
////
////    Mail::to('ashaduzzaman5698@gmail.com')->send(new WelcomeMail());
////
////   return new WelcomeMail();
////});

Route::get('email',[EmailController::class,'email']);



