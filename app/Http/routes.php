<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    //pagina princilal que esta en de la pagina de nortificaciones
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {


    Route::resource('users','UsersController' );

    Route::get('users/{id}/destroy}',[
        'uses'=> 'UsersController@destroy',
        'as'=> 'admin.users.destroy'
    ]);

  /*  Route::group(['middleware' => ['web']], function () {

        Route::group(['prefix' => 'admin'],function(){

            Route::resource('users','UsersController');
            Route::get('users/{id}/destroy',[
                'uses' => 'UsersController@destroy',
                'as'   => 'admin.users.destroy'
            ]);
        });
    });*/

    /*Route::get('admin/users/{users}',[
        'uses'=> 'UsersController@update',
        'as'=> 'admin.users.update'
    ]);*/

        // Uses Auth Middleware
    });
Route::auth();


Route::get('/home', 'HomeController@index');
