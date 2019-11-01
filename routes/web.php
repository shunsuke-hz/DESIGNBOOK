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

// ログインしないと見れないページ
Route::group(['middleware' => 'auth'], function () {
  // （仮）マイページ
  Route::get('/mypage', 'MypageController@index')->name('mypage');

  //  ユーザープロフィール編集
  Route::get('/users',  'UserController@edit')->name('users.edit');
  Route::post('/users/edit', 'UserController@update')->name('users.update');

  // ユーザーアイコントリミング
  Route::post('/cropper', 'UserController@photo');
  // ブランド脱会
  Route::post('/users/secede-brand', 'UserController@secedeBrand')->name('users.secedeBrand');
  // ブランド加入
  Route::post('/users/join-brand/{brand_id}', 'UserController@joinBrand')->name('users.joinBrand');

  // プロジェクト投稿ページ
  Route::get('project-post', function () {
    return view('project_post');
  });

  Route::post('project-post', 'ProjectController@create');
});

// TOPページ
Route::get('/', 'TopController@index');

// プロジェクト詳細ページ
Route::get('/project-detail', 'ProjectDetailController@index');

// プロダクト一覧ページ
Route::get('/product', 'ProductController@index');

// プロダクト詳細ページ
Route::get('/product-detail', 'ProductDetailController@index');

// ブランド一覧ページ
Route::get('/brands-list', 'BrandsListController@index');

// ブランド詳細ページ
Route::get('/brand-detail/{brand}', 'BrandController@show');


// ブランド作成ページ
Route::get('/brand-post', 'BrandController@index')->name('brand.index');
Route::post('/brand-post', 'BrandController@confirm')->name('brand.confirm');
Route::post('/brand-create', 'BrandController@create')->name('brand.create');



// Route::get('/project-post',  function () {
//   return view('project_post');
// });




// 仮登録ページ
Route::post('register/pre_check', 'Auth\RegisterController@pre_check')->name('register.pre_check');
// 本登録ページ
Route::get('register/verify/{token}', 'Auth\RegisterController@showForm');
// 本登録確認ページ
Route::post('register/main_check', 'Auth\RegisterController@mainCheck')->name('register.main.check');
// 本登録処理
Route::post('register/main_register', 'Auth\RegisterController@mainRegister')->name('register.main.registered');

// 認証系
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);

Route::post('/image-crop', 'UserController@photo');
