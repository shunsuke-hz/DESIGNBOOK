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

// 詳細ページ
Route::get('/project-detail', 'ProjectDetailController@index');

// 設計事務所一覧ページ
// Route::get('/design-office-list', 'DesignOfficesListController@index');

// メーカー一覧ページ
// Route::get('/manufacturers-list', 'ManufacturersListController@index');

// 設計事務所ページ
// Route::get('/design-office-mypage', 'DesignOfficeMypageController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
