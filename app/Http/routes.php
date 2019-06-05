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

Route::get('read', 'ReadController@index');

Route::group(['prefix' => 'list'], function() {

	Route::get('comment', 'ListController@comment');

	Route::get('completed', 'ListController@completed');

	Route::get('follow', 'ListController@follow');

	Route::get('friend', 'ListController@friend');

	Route::get('notification', 'ListController@notification');

	Route::get('process', 'ListController@process');

	Route::get('rate', 'ListController@rate');

	Route::get('search', 'ListController@search');

	Route::get('update', 'ListController@update');

	Route::get('view', 'ListController@view');

	Route::get('year/{year}', 'ListController@year');

	Route::get('category/{category}', 'ListController@category');

});

Route::group(['prefix' => 'detail'], function () {
	
	Route::get('author/{slug}', 'DetailController@author');

	Route::get('book/{slug}', 'DetailController@book');

	Route::get('character/{slug}', 'DetailController@character');

	Route::get('user/{slug}', 'DetailController@user');

	Route::get('trans', 'DetailController@trans');

});

Route::group(['prefix' => 'admin'], function() {

	Route::get('mod', 'AdminController@mod');

	Route::get('uploader', 'AdminController@uploader');

	Route::get('statistic', 'AdminController@statistic');

	Route::get('admin', 'AdminController@admin');

	Route::get('super-admin', 'AdminController@super_admin');
});