<?php
Route::group(array('before' => 'sentryAuth'),function(){
	Route::get('dashboard',array('as' => 'dashboard','uses' => 'DashboardController@index'));
	
	Route::get('website-content',array('as' => 'website-content','uses' => 'Admin\AdminWebsiteContent@index' ));
	
	Route::group(array('prefix' => 'branch-management'),function(){
		Route::get('/',array('as' => 'branch-management','uses' => 'Admin\AdminBranch@index' ));

		Route::get('new',array('as' => 'new-branch','uses' => 'Admin\AdminBranch@create'));
		Route::post('new','Admin\AdminBranch@store');
	});
	
	Route::get('job-order',array('as' => 'job-order','uses' => 'Admin\AdminJobOrder@index'));
	
	Route::get('settings',array('as' => 'settings','uses' => 'Admin\AdminSettings@index'));
});