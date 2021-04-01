<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
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
Route::get('/register', function () {
    return view('auth.register');
});

Auth::routes();
Route::group(['namespace' => 'client',
            'prefix' => 'client',
            'middleware' => 'auth'], function() {
                Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
                Route::get('/recommend', function () {
                    return view('client.recommend');
                });
});
Route::get('logout', function ()
{
   // auth()->logout();
    Session()->flush();

    return Redirect::to('/register');
})->name('logout');
