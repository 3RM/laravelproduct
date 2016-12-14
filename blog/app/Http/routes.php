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

use App\Admin;
use Illuminate\Http\Request;

//Route::get('/',['uses' => 'HomeController@index', 'as' => 'home']);

// IndexController
Route::get('/', function () {
    
});
Route::get('/product/{id}', function () {
    
});

// AdminController
Route::group(['prefix' => 'admin'], function () {
	
  Route::get('product',['uses' => 'AdminController@index', 'as' => 'home']);
  
  //Route::get('product/create', 'AdminController@create');
  
  Route::post('product', function ()    {
    // Соответствует URL "/admin/product"
  });
  Route::delete('admin/product/delete/{id}', 'AdminController@destroy');
    // Соответствует URL "/admin/product/{product}"
  
});

Route::post("admin/product/create", function (Request $request) {  
  
  $product = new Admin;
  $product->name = $request->name;;
  $product->description = $request->description;
  $product->save();

  return redirect('admin/product');
  
});

Route::delete("admin/product/delete/{id}", function ($id) {  
  
  Admin::findOrFail($id)->delete(); 
  
  return redirect('admin/product');
  
});

