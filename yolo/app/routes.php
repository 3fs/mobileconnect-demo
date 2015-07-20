<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/logout', 'HomeController@logout');

Route::get('/authenticate', 'HomeController@authenticate');

Route::get('/', array('before' => 'etalioLoggedIn', 'uses' => 'HomeController@showWelcome'));

Route::get('/login', array('before' => 'etalioLoggedIn', 'uses' => 'HomeController@login'));

Route::get('/dashboard', array('before' => 'etalioLoggedOut', 'uses' => 'HomeController@showDashboard'));
