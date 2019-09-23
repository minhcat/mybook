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

Route::get('login', 'LoginController@login');

Route::get('sign_up', 'LoginController@sign_up');

Route::get('logout', 'LoginController@logout');

Route::post('login', 'LoginController@post_login');

Route::post('sign_up', 'LoginController@post_sign_up');

Route::group(['prefix' => 'home'], function() {

	Route::get('ajax/add_new_view/{index}', 'HomeController@add_new_view');

	Route::get('ajax/add_new_update/{index}', 'HomeController@add_new_update');

	Route::get('ajax/add_new_comment/{index}', 'HomeController@add_new_comment');

	Route::get('ajax/add_new_rate/{index}', 'HomeController@add_new_rate');

	Route::get('ajax/search_book/{name}', 'HomeController@search_books_menu');

	Route::get('ajax/check_seen_notification', 'HomeController@check_seen_notification');

});

Route::group(['prefix' => 'list'], function() {

	Route::get('comment', 'ListController@comment');

	Route::get('completed', 'ListController@completed');

	Route::get('rate', 'ListController@rate');

	Route::get('update', 'ListController@update');

	Route::get('view', 'ListController@view');

	Route::get('search', 'ListController@search');

	Route::get('year/{year}', 'ListController@year');

	Route::get('category/{category}', 'ListController@category');

	Route::group(['middleware' => 'auth'], function() {

		Route::get('follow', 'ListController@follow');

		Route::get('friend', 'ListController@friend');

		Route::get('notification', 'ListController@notification');

		Route::get('history', 'ListController@history');

		Route::get('process', 'ListController@process');

	});
	
});

Route::group(['prefix' => 'detail'], function () {
	
	Route::get('author/{slug}', 'DetailController@author');

	Route::get('book/{slug}', 'DetailController@book');

	Route::get('character/{slug}', 'DetailController@character');

	Route::get('user/{slug}', 'DetailController@user');

	Route::get('trans/{slug}', 'DetailController@trans');

	Route::group(['prefix' => 'ajax'], function() {

		// book

		Route::get('like_book/{user_id}/{book_id}', 'DetailController@ajax_like_book');

		Route::get('unlike_book/{user_id}/{book_id}', 'DetailController@ajax_unlike_book');

		Route::get('follow_book/{user_id}/{book_id}', 'DetailController@ajax_follow_book');

		Route::get('unfollow_book/{user_id}/{book_id}', 'DetailController@ajax_unfollow_book');

		Route::get('rate_book/{user_id}/{book_id}/{point}', 'DetailController@ajax_rate_book');

		// author

		Route::get('like_author/{user_id}/{author_id}', 'DetailController@ajax_like_author');

		Route::get('unlike_author/{user_id}/{author_id}', 'DetailController@ajax_unlike_author');

		Route::get('follow_author/{user_id}/{author_id}', 'DetailController@ajax_follow_author');

		Route::get('unfollow_author/{user_id}/{author_id}', 'DetailController@ajax_unfollow_author');

		Route::get('rate_author/{user_id}/{author_id}/{point}', 'DetailController@ajax_rate_author');

		// trans

		Route::get('like_trans/{user_id}/{trans_id}', 'DetailController@ajax_like_trans');

		Route::get('unlike_trans/{user_id}/{trans_id}', 'DetailController@ajax_unlike_trans');

		Route::get('follow_trans/{user_id}/{trans_id}', 'DetailController@ajax_follow_trans');

		Route::get('unfollow_trans/{user_id}/{trans_id}', 'DetailController@ajax_unfollow_trans');

		Route::get('rate_trans/{user_id}/{trans_id}/{point}', 'DetailController@ajax_rate_trans');

		// user

		Route::get('like_user/{user_like_id}/{user_id}', 'DetailController@ajax_like_user');

		Route::get('unlike_user/{user_like_id}/{user_id}', 'DetailController@ajax_unlike_user');

	});

});

Route::group(['prefix' => 'admin'], function() {

	Route::get('mod', 'Admin\ModController@mod');

	Route::get('uploader', 'Admin\UploaderController@uploader');

	Route::get('statistic', 'Admin\StatisticController@statistic');

	Route::get('admin', 'Admin\AdminController@admin');

	Route::get('super-admin', 'Admin\SuperAdminController@super_admin');

	Route::group(['prefix' => 'mod'], function() {

		Route::group(['prefix' => 'ajax'], function() {

			Route::get('add_list_save/{id_comment}', 'Admin\ModController@add_list_save');

			Route::post('punish_user/{id_user}', 'Admin\ModController@punish_user');

			Route::post('ban_user/{id_user}', 'Admin\ModController@ban_user');
			
		});

	});

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

		Route::post('edit_system_common', 'Admin\SuperAdminController@edit_system_common');

		Route::post('edit_system_index', 'Admin\SuperAdminController@edit_system_index');

		Route::post('edit_system_list', 'Admin\SuperAdminController@edit_system_list');

		Route::post('edit_system_detail', 'Admin\SuperAdminController@edit_system_detail');

		Route::group(['prefix' => 'ajax'], function() {

			Route::get('delete_book_temporary/{id_book}', 'Admin\SuperAdminController@delete_book_temporary');

			Route::get('delete_book_permanent/{id_book}', 'Admin\SuperAdminController@delete_book_permanent');

			Route::get('restore_book/{id_book}', 'Admin\SuperAdminController@restore_book');

			Route::get('permiss_admin/{id_admin}/{access}', 'Admin\SuperAdminController@permiss_admin');

		});

	});
	
});

Route::get('/config/set_password/{user_id}', 'ConfigController@set_password');