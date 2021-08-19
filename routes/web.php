<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'admin'], function () {
    Auth::routes([
        'register' => true,
        'login'    => true,
        'reset'    => false,
        'verify'   => false,
    ]);
    Route::get('/home', "AdminController@admin")->name('admin.home');
    Route::get('/about', "AdminController@about")->name('admin.about');
    Route::get('/news', "AdminController@news")->name('admin.news');
});
Route::post('/create-donation', 'PaymentController@donate');

Route::group(['middleware'=>'language', 'prefix' => '{lang?}'],function ()
{
    Route::get('/', 'PageController@home');
    Route::get('/about', 'PageController@about');
    Route::get('/contact', 'PageController@contact');
    Route::get('/news', 'PageController@news');
    Route::get('/donate', 'PageController@donate');
    Route::get('/thank-you', 'PageController@thankYou');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
