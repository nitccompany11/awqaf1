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

Route::get('language/{lang}', 'LangController@index');

Route::group(['middleware' => 'lang'], function(){

	require_once __DIR__ . '/admin.php';

	// Web Route
	Route::get('/', 'HomeController@index')->name('home');
	Route::get('/home', 'HomeController@index');

	Route::post('subscribe', 'HomeController@subscribe')->name('subscribe');

	Route::get('page/{id}/{name?}', 'HomeController@page')->name('get.page');

	Route::get('teamwork', 'HomeController@teamwork')->name('get.teamwork');
	Route::get('vision', 'HomeController@vission')->name('get.vission');

	Route::get('blogs', 'HomeController@blogs')->name('get.blogs');
	Route::get('blogs/{id}/{name?}', 'HomeController@blog')->name('get.blog');

	Route::get('companies', 'HomeController@companies')->name('get.companies');
	Route::get('companies/{id}/{name?}', 'HomeController@company')->name('get.company');

	Route::get('contact', 'HomeController@contact')->name('contact');
	Route::post('contact', 'HomeController@contactSave')->name('set.contact');

	Route::get('reports', 'HomeController@reports')->name('get.reports');

	Route::get('projects', 'HomeController@projects')->name('get.projects');
	Route::get('projects/{id}/{name?}', 'HomeController@project')->name('get.project');

	Route::get('investment', 'HomeController@investment')->name('get.investment');

	Route::post('validCertificate', 'HomeController@validCertificate');

	Auth::routes();

	Route::group(['middleware' => 'auth'], function() {

	});

});
	