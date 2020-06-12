<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|, 'middleware'=>'adminLogin'
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/login', 'UserController@getLoginAdmin');
Route::post('admin/login', 'UserController@postLoginAdmin');
Route::get('admin/logout', 'UserController@getLogoutAdmin');

Route::group(['prefix'=>'admin', 'middleware'=>'adminLogin'], function() {
	Route::group(['prefix'=>'category'], function() {
		Route::get('list', 'categoryController@getList');

		Route::get('edit/{id}', 'categoryController@getEdit');
		Route::post('edit/{id}', 'categoryController@postEdit');

		Route::get('insert', 'categoryController@getInsert');
		Route::post('insert', 'categoryController@postInsert');

		Route::get('delete/{id}', 'categoryController@getDelete');
	});

	Route::group(['prefix'=>'type'], function() {
		Route::get('list', 'typeController@getList');

		Route::get('edit/{id}', 'typeController@getEdit');
		Route::post('edit/{id}', 'typeController@postEdit');

		Route::get('insert', 'typeController@getInsert');
		Route::post('insert', 'typeController@postInsert');

		Route::get('delete/{id}', 'typeController@getDelete');
	});

	Route::group(['prefix'=>'product'], function() {
		Route::get('list', 'productController@getList');

		Route::get('edit/{id}', 'productController@getEdit');
		Route::post('edit/{id}', 'productController@postEdit');

		Route::get('insert', 'productController@getInsert');
		Route::post('insert', 'productController@postInsert');

		Route::get('delete/{id}', 'productController@getDelete');
	});

	Route::group(['prefix'=>'material'], function() {
		Route::get('list', 'materialController@getList');

		Route::get('edit/{id}', 'materialController@getEdit');
		Route::post('edit/{id}', 'materialController@postEdit');

		Route::get('insert', 'materialController@getInsert');
		Route::post('insert', 'materialController@postInsert');

		Route::get('delete/{id}', 'materialController@getDelete');
	});

	Route::group(['prefix'=>'spice'], function() {
		Route::get('list', 'spiceController@getList');

		Route::get('edit/{id}', 'spiceController@getEdit');
		Route::post('edit/{id}', 'spiceController@postEdit');

		Route::get('insert', 'spiceController@getInsert');
		Route::post('insert', 'spiceController@postInsert');

		Route::get('delete/{id}', 'spiceController@getDelete');
	});

	Route::group(['prefix'=>'timeCook'], function() {
		Route::get('list', 'timeCookController@getList');

		Route::get('edit/{id}', 'timeCookController@getEdit');
		Route::post('edit/{id}', 'timeCookController@postEdit');

		Route::get('insert', 'timeCookController@getInsert');
		Route::post('insert', 'timeCookController@postInsert');

		Route::get('delete/{id}', 'timeCookController@getDelete');
	});

	Route::group(['prefix'=>'detail'], function() {
		Route::get('list', 'detailController@getList');

		Route::get('edit/{id}', 'detailController@getEdit');
		Route::post('edit/{id}', 'detailController@postEdit');

		Route::get('insert', 'detailController@getInsert');
		Route::post('insert', 'detailController@postInsert');

		Route::get('delete/{id}', 'detailController@getDelete');
	});

	Route::group(['prefix'=>'User'], function() {
		Route::get('list', 'UserController@getList');

		Route::get('edit/{id}', 'UserController@getEdit');
		Route::post('edit/{id}', 'UserController@postEdit');

		Route::get('insert', 'UserController@getInsert');
		Route::post('insert', 'UserController@postInsert');

		Route::get('delete/{id}', 'UserController@getDelete');
	});

	Route::group(['prefix'=>'level'], function() {
		Route::get('list', 'levelController@getList');

		Route::get('edit/{id}', 'levelController@getEdit');
		Route::post('edit/{id}', 'levelController@postEdit');

		Route::get('insert', 'levelController@getInsert');
		Route::post('insert', 'levelController@postInsert');

		Route::get('delete/{id}', 'levelController@getDelete');
	});

	Route::group(['prefix'=>'comment'], function() {
		Route::get('delete/{id}', 'commentController@getDelete');
	});
});



Route::get('homepage', 'PageController@homePage')->name('homepage');

Route::get('product/{slug}-{id}', 'PageController@getListProduct')->name('get.detail.product');

Route::get('danh-muc/{slug}-{id}', 'PageController@getListCategory')->name('get.category.product');

Route::get('menu/{slug}-{id}', 'PageController@getListType')->name(
	'get.type.product');

Route::get('menuc/{slug}-{id}', 'PageController@getMenuCate')->name(
	'get.menuc.product');

Route::get('menut/{slug}-{id}', 'PageController@getMenuTyp')->name(
	'get.menut.product');

Route::get('login','PageController@getLogin');
Route::post('login','PageController@postLogin');
Route::get('dang-xuat','PageController@getLogout')->name('post.logout.user');

Route::post('danh-gia/{id}', 'commentController@postComment');
// Route::get('user', 'PageController@index')->name('user_index');
Route::get('user/{id}', 'PageController@getUserProfile')->name('user_edit');
Route::post('user/{id}', 'PageController@postUserProfile');

Route::get('signup', 'PageController@getDangki');
Route::post('signup', 'PageController@postDangki');

Route::get('search', 'PageController@findProduct')->name('find.product');

