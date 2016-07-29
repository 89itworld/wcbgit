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



Route::get('/', 'HomeController@getIndex');
Route::get('/retailer', 'StoreController@getIndex');
Route::get('/signUp', 'UserController@getRegistration');
Route::get('/user_login', 'UserController@getLogin');
Route::post('/user_login', 'UserController@postLogin');
Route::get('logout','HomeController@doLogout');
Route::get('get_coupons', array('uses' => 'HomeController@getCoupons'));
Route::get('view-retailer/{retailers}', 'HomeController@getViewRetailer');



Route::post('/registration', 'UserController@postRegistration');

Route::controller('home','HomeController');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('register/verify/{confirmationCode}', [
    'as' => 'confirmation_path',
    'uses' => 'UserController@confirm'
]);
Blade::extend(function($value) {
    return preg_replace('/\@var(.+)/', '<?php ${1}; ?>', $value);
});