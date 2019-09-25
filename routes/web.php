<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// TOPページ
Route::get('/', 'TopController@index');

// プロジェクト詳細ページ
Route::get('/project-detail', 'ProjectDetailController@index');

// プロダクト一覧ページ
Route::get('/product', 'ProductController@index');

// プロダクト詳細ページ
Route::get('/product-detail', 'ProductDetailController@index');

// （仮）ブランド一覧ページ
Route::get('/brands-list', 'BrandsListController@index');

// （仮）マイページ
Route::get('/mypage', 'MypageController@index');



// 認証系
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('users/{user}',  ['as' => 'users.edit', 'uses' => 'UserController@edit']);
Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);
