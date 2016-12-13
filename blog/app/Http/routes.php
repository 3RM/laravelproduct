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

//Route::get('/',['uses' => 'HomeController@index', 'as' => 'home']);

// IndexController
Route::get('/', function () {
    
});
Route::get('/product/{id}', function () {
    
});

// AdminController
Route::group(['prefix' => 'admin'], function () {
	
  Route::get('product',['uses' => 'AdminController@index', 'as' => 'home']);
  
  Route::get('product/create', function ()    {
    // Соответствует URL "/admin/product/create"
  });
  Route::post('product', function ()    {
    // Соответствует URL "/admin/product"
  });
  Route::delete('product/{product}', function ()    {
    // Соответствует URL "/admin/product/{product}"
  });
  
});

