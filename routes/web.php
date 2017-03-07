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
    return view('welcome');
//    return redirect('/admin/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

<<<<<<< HEAD

//-----play game
Route::get('/play_game', 'HomeController@play_game');
=======
Route::get('/getteam', 'AdminCreateTrnMatchController@getTeamByLiga');
Route::post('/storematch', 'AdminCreateTrnMatchController@storeMatch');
>>>>>>> update admin
