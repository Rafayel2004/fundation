<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\NewsController;
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
    Route::get('/home', "Admin\AdminController@admin")->name('admin.home');
    Route::get('/about', "Admin\AdminController@about")->name('admin.about');
    //Route::get('/news', "Admin\AdminController@news")->name('admin.news');
    Route::resource('news', "Admin\NewsController");
    Route::resource('about', "Admin\AboutUsController");


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
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
