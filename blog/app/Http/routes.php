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

// IndexController
Route::get('/', function () {
    
});
Route::get('/product/{product}', function () {
    
});

// AdminController
Route::group(['prefix' => 'admin/product'], function () {

    Route::get('/', 'AdminController@index')->name('admin');

    Route::get('/create', 'AdminController@create');

    Route::post('/', 'AdminController@store');

    Route::delete('/{product}', 'AdminController@destroy');
});


//Route::post("admin/product/create", function (Request $request) {
//
//    $product = new Admin;
//    $product->name = $request->name;
//    $product->description = $request->description;
//    $product->save();
//
//    return redirect('admin/product');
//});
//
//Route::delete("admin/product/delete/{id}", function ($id) {
//
//    Admin::findOrFail($id)->delete();
//
//    return redirect('admin/product');
//});

