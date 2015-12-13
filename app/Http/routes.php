<?php

/*
 * |--------------------------------------------------------------------------
 * | Application Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register all of the routes for an application.
 * | It's a breeze. Simply tell Laravel the URIs it should respond to
 * | and give it the controller to call when that URI is requested.
 * |
 */
Route::get ( '/',array('as' => 'welcome', function () {
	return view ( 'front\welcome' );
} ));
Route::resource ( 'user', 'UserController' );
Route::controller ( 'contact', 'ContactController' );
Route::controller ( 'email', 'EmailController' );
Route::resource ( 'post', 'PostController', [ 
		'except' => [ 
				'show',
				'edit',
				'update' 
		] 
] );

Route::resource ( 'typeAnnonce', 'TypeAnnonceController', [
		'except' => [
				'show',
				'edit',
				'update'
		]
] );