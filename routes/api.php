<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
  return $request->user();
});

// TopページのAPI
Route::get('/', 'TopController@show');
Route::get('/tags', 'TopController@tags');

// Project詳細ページのAPI
Route::get('/project-detail/{project_id}', 'ProjectDetailController@select');

// ProductページのAPI
Route::get('/product', 'ProductController@show');

// Product詳細ページのAPI
Route::get('/product-detail/{product_id}', 'ProductDetailController@select');

// brands-listページのAPI
Route::get('/brands-list', 'BrandsListController@show');
