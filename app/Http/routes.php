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

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    // Route::get('/home', 'HomeController@index');
 //    Route::get('/', function () {
 //    	return view('welcome');
	// });
	Route::get('/', ['as' =>'main', 'uses' => 'IndexController@index']);
	Route::group(['prefix' => 'projects'], function () {
		
		Route::get('/', [
			'as' => 'projects', 
			'uses' => 'ProjectsController@index'
		]);
		
		Route::get('create', [
			'as' => 'projects.create', 
			'uses' => 'ProjectsController@create',
			'middleware' => 'auth'
		]);
		
		Route::post('/', [
			'as' => 'projects.store', 
			'uses' => 'ProjectsController@store'
		]);
		
		Route::get('{id}/{title}', [
			'as' => 'projects.show', 
			'uses' => 'ProjectsController@show'
		]);
		
		Route::put('{id}/{title}', [
			'as' => 'projects.update', 
			'uses' => 'ProjectsController@update',
			'middleware' => 'auth'
		]);

	});
	Route::group(['prefix' => 'messages'], function () {
	    Route::get('/', ['as' => 'messages', 'uses' => 'MessagesController@index']);
	    Route::get('create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
	    Route::post('/', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
	    Route::get('{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
	    Route::put('{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
	});
});


// Route::group(
//     [
//         'prefix' => LaravelLocalization::setLocale(),
//         'middleware' => [ 'localeSessionRedirect', 'localizationRedirect' ]
//     ],
//     function()
//     {
//     	Route::group(['middleware' => 'web'], function () {
//     		Route::auth();
//     		// Route::get('/home', 'HomeController@index');
//     		Route::get('/', function () {
//     			return view('welcome');
//     		});
//     		Route::group(['prefix' => 'messages'], function () {
//     			Route::get('/', ['as' => 'messages', 'uses' => 'MessagesController@index']);
//     			Route::get('create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
//     			Route::post('/', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
//     			Route::get('{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
//     			Route::put('{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
//     		});
//     	});
//     }
// );