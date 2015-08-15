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

/*
	Static page routes
*/
Route::get('/', 'PageController@showWelcome');
Route::get('home', ['middleware' => 'auth', 'uses' => 'PageController@home']);

//TEMP
Route::get('logout', 'PageController@doLogout'); //TA VÄCK OCH ERSÄTT MED auth/logout
//END TEMP
Route::get('contact', 'PageController@showContact');


/*
----------------------------------
| Dessa routes till våra news hade kunnats göra på följande sätt:
| //Route::resource('news', 'PageController');
| Ifall vi hade använt funktioner i vår PageController vid namn så som index, create etc etc.
*/
Route::get('news', 'PageController@showAllArticle'); //Index
Route::get('news/create', 'PageController@createArticle'); //create
Route::get('news/{id}', 'PageController@showArticle'); //show
Route::patch('news/{id}', 'PageController@updateArticle');
Route::post('news', 'PageController@postArticle'); //store
Route::get('news/{id}/edit', 'PageController@editArticle');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::controllers([
   'password' => 'Auth\PasswordController',
]);	