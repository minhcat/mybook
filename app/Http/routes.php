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

Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');

Route::get('read/{book_slug}/{trans_slug}/{chap_slug}', 'ReadController@index');

Route::group(['prefix' => 'list'], function() {

	Route::get('comment', 'ListController@comment');

	Route::get('completed', 'ListController@completed');

	Route::get('follow', 'ListController@follow');

	Route::get('friend', 'ListController@friend');

	Route::get('notification', 'ListController@notification');

	Route::get('history', 'ListController@history');

	Route::get('process', 'ListController@process');

	Route::get('rate', 'ListController@rate');

	Route::get('update', 'ListController@update');

	Route::get('view', 'ListController@view');

	Route::get('search', 'ListController@search');

	Route::get('year/{year}', 'ListController@year');

	Route::get('category/{category}', 'ListController@category');

});

Route::group(['prefix' => 'detail'], function () {
	
	Route::get('author/{slug}', 'DetailController@author');

	Route::get('book/{slug}', 'DetailController@book');

	Route::get('character/{slug}', 'DetailController@character');

	Route::get('user/{slug}', 'DetailController@user');

	Route::get('trans/{slug}', 'DetailController@trans');

});

Route::group(['prefix' => 'admin'], function() {

	Route::get('mod', 'AdminController@mod');

	Route::get('uploader', 'AdminController@uploader');

	Route::get('statistic', 'AdminController@statistic');

	Route::get('admin', 'AdminController@admin');

	Route::get('super-admin', 'AdminController@super_admin');

	Route::group(['prefix' => 'uploader'], function() {

		Route::post('create_book', 'AdminController@create_book');

		Route::post('update_book/{id_book}', 'AdminController@update_book');

		Route::get('delete_book/{id_book}', 'AdminController@delete_book');

		Route::post('create_chap/{id_book}', 'AdminController@create_chap');

		Route::post('update_chap/{id_book}/{id_chap}', 'AdminController@update_chap');

		Route::post('add_keyword/{id_book}', 'AdminController@add_keyword');

		Route::group(['prefix' => 'ajax'], function() {

			Route::get('call_approved_book/{id_book}', 'AdminController@call_admin_approved_book');
			
		});

	});
	
});