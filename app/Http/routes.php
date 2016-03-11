<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return   view('welcome');
});
Route::get('/welcome','WelcomeController@index');
Route::resource('articles', 'ArticlesController');

// Route::get('/section','WelcomeController@section');
// Route::get('/articles',['uses'=>'ArticlesController@index']);
// Route::get('/articles/create',['uses' => 'ArticlesController@create']);
// Route::get('/articles/{id}',['uses' => 'ArticlesController@show']);

// Route::post('/articles',['uses' => 'ArticlesController@store']);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

// Route::group(['middleware' => ['web']], function () {
//     //
// });
