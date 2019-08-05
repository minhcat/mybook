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

	Route::get('mod', 'Admin\ModController@mod');

	Route::get('uploader', 'Admin\UploaderController@uploader');

	Route::get('statistic', 'Admin\StatisticController@statistic');

	Route::get('admin', 'Admin\AdminController@admin');

	Route::get('super-admin', 'Admin\SuperAdminController@super_admin');

	Route::group(['prefix' => 'uploader'], function() {

		// book

		Route::post('create_book', 'Admin\UploaderController@create_book');

		Route::post('update_book/{id_book}', 'Admin\UploaderController@update_book');

		Route::get('delete_book/{id_book}', 'Admin\UploaderController@delete_book');

		Route::post('add_keyword/{id_book}', 'Admin\UploaderController@add_keyword');

		// chap

		Route::post('create_chap/{id_book}', 'Admin\UploaderController@create_chap');

		Route::post('update_chap/{id_book}/{id_chap}', 'Admin\UploaderController@update_chap');

		Route::get('delete_chap/{id_chap}', 'Admin\UploaderController@delete_chap');

		// author

		Route::post('create_author', 'Admin\UploaderController@create_author');

		Route::post('update_author/{id_author}', 'Admin\UploaderController@update_author');

		Route::get('delete_author/{id_author}', 'Admin\UploaderController@delete_author');

		// character

		Route::post('create_character', 'Admin\UploaderController@create_character');

		Route::post('update_character/{id_character}', 'Admin\UploaderController@update_character');

		Route::get('delete_character/{id_character}', 'Admin\UploaderController@delete_character');

		// translator

		Route::post('create_trans', 'Admin\UploaderController@create_trans');

		Route::post('update_trans/{id_trans}', 'Admin\UploaderController@update_trans');

		Route::get('delete_trans/{id_trans}', 'Admin\UploaderController@delete_trans');

		// ajax

		Route::group(['prefix' => 'ajax'], function() {

			Route::get('call_approved_book/{id_book}', 'Admin\UploaderController@call_admin_approved_book');

			Route::get('call_approved_chap/{id_chap}', 'Admin\UploaderController@call_admin_approved_chap');
			
		});

	});

	Route::group(['prefix' => 'admin'], function() {

		Route::group(['prefix' => 'ajax'], function() {

			Route::get('approve_book/{id_book}', 'Admin\AdminController@approve_book');

			Route::get('reply_book/{id_book}/{reply_content}', 'Admin\AdminController@reply_book');

			Route::get('approve_user/{id_comment_report}', 'Admin\AdminController@approve_user');

			Route::get('reply_user/{id_user}/{reply_content}', 'Admin\AdminController@reply_user');

			Route::post('post_mail', 'Admin\AdminController@post_mail');

			Route::post('post_noti', 'Admin\AdminController@post_noti');
			
		});

	});

	Route::group(['prefix' => 'super-admin'], function() {

		Route::group(['prefix' => 'ajax'], function() {

			Route::get('delete_book_temporary/{id_book}', 'Admin\SuperAdminController@delete_book_temporary');

		});

	});
	
});