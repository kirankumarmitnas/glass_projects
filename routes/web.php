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

Route::get('/clear', function () {
    $exitCode2 = \Illuminate\Support\Facades\Artisan::call('cache:clear');
    $exitCode2 = \Illuminate\Support\Facades\Artisan::call('config:clear');
    $exitCode1 = \Illuminate\Support\Facades\Artisan::call('config:cache');
    $exitCode1 = \Illuminate\Support\Facades\Artisan::call('route:clear');
    $exitCode3 = \Illuminate\Support\Facades\Artisan::call('view:clear');
    return '<h1>CLEARED All </h1>';
});
// Route::get('/storage-link', function () {
//     $exitCode2 = \Illuminate\Support\Facades\Artisan::call('storage:link');
//     return $exitCode2;
// });


Route::get('/', function () {return view('welcome');});

Route::prefix('admin4')->group(function () {
   Route::get('login','Admin/LoginController@showLogin');
});

Route::group(['prefix' => 'admin','namespace' => 'App\Http\Controllers'], function()
{
  Route::get('users',function(){return 'Matches The "/admin/users" URL';});
  Route::get('login','Admin\LoginController@showLogin');
  
});