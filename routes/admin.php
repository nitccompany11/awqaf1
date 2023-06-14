<?php

	// Admin Route
	Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function() {

		Route::get('/', 'AdminController@index');

		Route::get('setting', 'SettingController@index');
		Route::post('setting', 'SettingController@save');

		Route::get('setting/image', 'SettingController@image');
		Route::post('setting/image', 'SettingController@imageSave');

		Route::get('user/myProfile', 'AdminController@myProfile');
		Route::post('user/myProfile', 'AdminController@myProfileSave');

		Route::get('user/user', 'UserController@user');
		Route::get('user/admin', 'UserController@admin');
		Route::get('user/add', 'UserController@create');
		Route::post('user/add', 'UserController@store');
		Route::get('user/{id}/edit', 'UserController@edit');
		Route::post('user/{id}/edit', 'UserController@update');
		Route::get('user/{id}/delete', 'UserController@delete');
		Route::get('user/{id}/show', 'UserController@show');
		Route::post('user/deleteAll', 'UserController@deleteAll');
		Route::get('user/{id}/active', 'UserController@active');
		Route::get('user/{id}/unactive', 'UserController@unActive');

		Route::get('page', 'PageController@index');
		Route::get('page/add', 'PageController@create');
		Route::post('page/add', 'PageController@store');
		Route::get('page/{id}/edit', 'PageController@edit');
		Route::post('page/{id}/edit', 'PageController@update');
		Route::get('page/{id}/noMenu', 'PageController@noMenu');
		Route::get('page/{id}/menu', 'PageController@menu');
		Route::get('page/{id}/delete', 'PageController@delete');
		Route::get('page/{id}/show', 'PageController@show');
		Route::post('page/deleteAll', 'PageController@deleteAll');

		Route::get('permissionGroup', 'PermissionGroupController@index');
		Route::get('permissionGroup/add', 'PermissionGroupController@create');
		Route::post('permissionGroup/add', 'PermissionGroupController@store');
		Route::get('permissionGroup/{id}/edit', 'PermissionGroupController@edit');
		Route::post('permissionGroup/{id}/edit', 'PermissionGroupController@update');
		Route::get('permissionGroup/{id}/delete', 'PermissionGroupController@delete');
		Route::get('permissionGroup/{id}/show', 'PermissionGroupController@show');
		Route::get('permissionGroup/{id}/permission', 'PermissionGroupController@permission');
		Route::post('permissionGroup/{id}/permission', 'PermissionGroupController@permissionUpdate');
		Route::post('permissionGroup/deleteAll', 'PermissionGroupController@deleteAll');

		Route::get('contact', 'ContactController@index');
		Route::get('contact/{id}/replay', 'ContactController@replay');
		Route::post('contact/{id}/replay', 'ContactController@replaySend');

		Route::get('notifications/send', 'AdminController@notifications');
		Route::post('notifications/send', 'AdminController@notificationsSave');

		Route::get('blogs', 'BlogsController@index');
		Route::get('blogs/add', 'BlogsController@create');
		Route::post('blogs/add', 'BlogsController@store');
		Route::get('blogs/{id}/edit', 'BlogsController@edit');
		Route::post('blogs/{id}/edit', 'BlogsController@update');
		Route::get('blogs/{id}/delete', 'BlogsController@delete');
		Route::get('blogs/{id}/show', 'BlogsController@show');
		Route::post('blogs/deleteAll', 'BlogsController@deleteAll');
		Route::get('blogs/{id}/status', 'BlogsController@status');

		Route::get('layouts', 'LayoutsController@index');
		Route::get('layouts/add', 'LayoutsController@create');
		Route::post('layouts/add', 'LayoutsController@store');
		Route::get('layouts/{id}/edit', 'LayoutsController@edit');
		Route::post('layouts/{id}/edit', 'LayoutsController@update');

		Route::get('testom', 'TestomController@index');
		Route::get('testom/add', 'TestomController@create');
		Route::post('testom/add', 'TestomController@store');
		Route::get('testom/{id}/edit', 'TestomController@edit');
		Route::post('testom/{id}/edit', 'TestomController@update');
		Route::get('testom/{id}/delete', 'TestomController@delete');
		Route::get('testom/{id}/show', 'TestomController@show');
		Route::get('testom/{id}/status', 'TestomController@status');
		Route::post('testom/deleteAll', 'TestomController@deleteAll');

		Route::get('teamwork', 'TeamworkController@index');
		Route::get('teamwork/add', 'TeamworkController@create');
		Route::post('teamwork/add', 'TeamworkController@store');
		Route::get('teamwork/{id}/edit', 'TeamworkController@edit');
		Route::post('teamwork/{id}/edit', 'TeamworkController@update');
		Route::get('teamwork/{id}/delete', 'TeamworkController@delete');
		Route::get('teamwork/{id}/show', 'TeamworkController@show');
		Route::get('teamwork/{id}/status', 'TeamworkController@status');
		Route::post('teamwork/deleteAll', 'TeamworkController@deleteAll');

		Route::get('companies', 'CompanyController@index');
		Route::get('companies/add', 'CompanyController@create');
		Route::post('companies/add', 'CompanyController@store');
		Route::get('companies/{id}/edit', 'CompanyController@edit');
		Route::post('companies/{id}/edit', 'CompanyController@update');
		Route::get('companies/{id}/delete', 'CompanyController@delete');
		Route::get('companies/{id}/show', 'CompanyController@show');
		Route::get('companies/{id}/status', 'CompanyController@status');
		Route::post('companies/deleteAll', 'CompanyController@deleteAll');

		Route::get('projects', 'ProjectsController@index');
		Route::get('projects/add', 'ProjectsController@create');
		Route::post('projects/add', 'ProjectsController@store');
		Route::get('projects/{id}/edit', 'ProjectsController@edit');
		Route::post('projects/{id}/edit', 'ProjectsController@update');
		Route::get('projects/{id}/delete', 'ProjectsController@delete');
		Route::get('projects/{id}/show', 'ProjectsController@show');
		Route::get('projects/{id}/status', 'ProjectsController@status');
		Route::post('projects/deleteAll', 'ProjectsController@deleteAll');
		Route::get('projects/{id}/point', 'ProjectsController@point');
		Route::post('projects/{id}/point', 'ProjectsController@pointSave');
		Route::get('projects/{id}/editPoint', 'ProjectsController@editPoint');
		Route::post('projects/{id}/editPoint', 'ProjectsController@updatePoint');
		Route::get('projects/{id}/deletePoint', 'ProjectsController@deletePoint');

		Route::get('reports', 'ReportsController@index');
		Route::get('reports/add', 'ReportsController@create');
		Route::post('reports/add', 'ReportsController@store');
		Route::get('reports/{id}/edit', 'ReportsController@edit');
		Route::post('reports/{id}/edit', 'ReportsController@update');
		Route::get('reports/{id}/delete', 'ReportsController@delete');
		Route::get('reports/{id}/show', 'ReportsController@show');
		Route::get('reports/{id}/status', 'ReportsController@status');
		Route::post('reports/deleteAll', 'ReportsController@deleteAll');

	});