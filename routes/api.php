<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/create-product', 'ProductController@store');

Route::get('/get-product/{id}', 'ProductController@getData');

Route::get('/get-allproduct', 'ProductController@getAllData');

Route::get('/search-product','ProductController@searchData');

Route::patch('/update-data/{id}', 'ProductController@updateData');

Route::delete('/delete-product/{id}', 'ProductController@deleteData');
