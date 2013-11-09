<?php 

Route::group(array('prefix' => 'account'),function()
{
	Route::get('logout',array('as' => 'logout', 'uses' => 'AccountController@getLogout'));
	Route::get('login',array('as' => 'login', 'uses' => 'AccountController@getLogin'));
	Route::post('login','AccountController@postLogin');
	Route::get('forgot-password',array('as' => 'forgot-password','uses' => 'AccountController@getForgotPassword'));
});