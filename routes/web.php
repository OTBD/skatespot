<?php

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
    if(Auth::guest()){
        return view('welcome');
    }else{
        return view('home');
    }

});

Route::get('profile', 'UserController@profile');
Route::post('profile', 'UserController@update_avatar');
Route::post('profile', 'UserController@update_header');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
{
    Route::get('/admin', function()
    {
        $users = DB::table('users')->count();
        $spots = DB::table('spots')->count();

        // return $users;

        return view('admin/home', compact('users','spots'));
    });

});
