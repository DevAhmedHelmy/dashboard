<?php

use App\Http\Controllers\Auth\LoginController;

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

Route::get('/admin', function () {
    return view('welcome');
});


Route::group(['middleware' => 'is_admin'],function(){
	// start members route
	Route::resource('members','MemberController');	
	Route::post('members/{id}/update/', 'MemberController@update')->name('memberUpdate');
	Route::get('/members/{id}/show', 'MemberController@show');
	Route::any('/members/{id}/delete','MemberController@destroy');
	Route::get('/newMembers','MemberController@newMembers');
	Route::any('/newMembers/{id}/active','MemberController@active');
	Route::any('/newMembers/{id}/notactive','MemberController@notactive');
	Route::get('/logout','MemberController@getSignOut');
	// end members route

	// start categories route
	Route::get('categories', 'CategoryController@index')->name('categories');
	Route::get('categories/create', 'CategoryController@create')->name('create');
	Route::post('/categories', 'CategoryController@store');
	Route::get('/categories/{id}/edit', 'CategoryController@edit');
	Route::get('/categories/{id}/show', 'CategoryController@show');
	Route::post('/categories/{id}/update', 'CategoryController@update')->name('categoryUpdate');
	Route::any('/categories/{id}/visible','CategoryController@visible');
	Route::any('/categories/{id}/notVisible','CategoryController@notVisible');
	Route::any('/categories/{id}/allowComment','CategoryController@allowComment');
	Route::any('/categories/{id}/notAllowComment','CategoryController@notAllowComment');
	Route::any('/categories/{id}/allowadds','CategoryController@allowadds');
	Route::any('/categories/{id}/notAllowAdds','CategoryController@notAllowAdds');
	Route::any('/categories/{id}/delete','CategoryController@destroy');
	// end categories route

	// start items route
	Route::get('/items','ItemController@index');
	Route::get('/items/create','ItemController@create');
	Route::post('/items','ItemController@store');
	Route::get('/items/{id}/edit','ItemController@edit');
	Route::post('/items/{id}/update','ItemController@update')->name('itemUpdate');
	Route::any('/items/{id}/delete','ItemController@destroy');
	Route::any('/items/{id}/show','ItemController@show');
	Route::any('/items/{id}/approve','ItemController@approve');
	Route::any('/items/{id}/notapprove','ItemController@notapprove');
	// end items route

	// start comments route
	Route::get('/comments','CommentController@index');
	Route::get('/comments/{id}/edit','CommentController@edit');
	Route::post('/comments/{id}/update','CommentController@update')->name('commentUpdate');
	Route::any('/comments/{id}/delete','CommentController@destroy');
	// end comments route


});
	Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// fornt end route
Route::get('/','IndexController@index');
Route::get('/about','IndexController@about');
Route::get('/front/categories','Site\CategoryController@index');
Route::get('/categories/{id}/show','Site\CategoryController@show');
// Route::get('frontItem/{id}/show','IndexController@show');
// Route::group(['middleware' => 'is_user'],function(){
// 	Route::get('frontItem/{id}/show','IndexController@show');	
// });