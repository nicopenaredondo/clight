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

/*
|--------------------------------------------------------------------------
|  Routes
|--------------------------------------------------------------------------
| 1. Dashboard
| 2. myExpense
| 3. myBalance
| 4. reports
| 5. settings
*/

//dashboard
Route::get('/','Admin\AdminBranch@index');

Route::group(array('prefix' => 'account'),function()
{
	Route::get('login',array('as' => 'login','uses' => 'AccountController@getLogin'));
	Route::get('forgot-password',array('as' => 'forgot-password','uses' => 'AccountController@getForgotPassword'));
});



