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

Route::get('/', function () {
    return view('landing');
});

Route::auth();

Route::group(['prefix' => 'api'], function () {
    // News routes
	Route::get('news', [
	    'as' => 'news', 'uses' => 'NewsController@index'
	]);

	Route::get('news/{id}', [
	    'as' => 'news_item', 'uses' => 'NewsController@get'
	]);

	// Jobs routes
	Route::get('jobs', [
	    'as' => 'jobs', 'uses' => 'JobsController@index'
	]);

	Route::get('job/{id}', [
	    'as' => 'job', 'uses' => 'JobsController@get'
	]);

	// Carousel routes
	Route::get('carousel', [
	    'as' => 'carousel', 'uses' => 'CarouselController@index'
	]);

	Route::get('carousel/{id}', [
	    'as' => 'carousel_item', 'uses' => 'CarouselController@get'
	]);

	//page routes
	
	Route::get('page/{url}', [
	    'as' => 'page', 'uses' => 'PageController@getPage'
	]);
});