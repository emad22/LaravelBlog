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


Route::group(['namespace'=>'user'],function(){

	Route::get('/','HomeController@index');
	Route::get('post', 'PostController@index')->name('post');

});
Route::group(['namespace'=>'admin'],function(){
	Route::get('admin/home', 'HomeController@home')->name('admin.home');
	Route::resource('admin/post','PostController');
	Route::resource('admin/user','UserController');
	Route::resource('admin/tag','TagController');
	Route::resource('admin/category','CategoryController');

});


// Route::get('admin/home', function (){
// 	return view('admin/home');
// })->name('home');

// Route::get('admin/post', function (){
// 	return view('admin.post.post');
// })->name('post');

// Route::get('admin/tag', function (){
// 	return view('admin.tag.tag');
// });

// Route::get('admin/category', function (){
// 	return view('admin.category.category');
// });