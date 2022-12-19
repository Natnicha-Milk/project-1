<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Adduser;
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
})->name('welcome');

Route::get('main-user', function () {
    return view('main-user');
})->name('main-user');


Route::get('user-home', function () {
    return view('user-home');
})->name('user-home');


Route::get('form-user', function () {
    return view('form-user');
})->name('form-user');

// Route::get('app-user', function () {
//     return view('app-user');
// })->name('app-user');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('app-user',[Adduser::class,'add'])->name('app-user');
;
// Route::get('app-user',[Adduser::class,'adduser'])->name('app-user');

Route::post('insert-user',[Adduser::class,'insert']);