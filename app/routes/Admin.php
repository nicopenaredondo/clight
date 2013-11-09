<?php
Route::group(array('before' => 'sentryAuth'),function(){
	Route::get('dashboard',array('as' => 'dashboard','uses' => 'DashboardController@index'));
	Route::get('website-content',array('as' => 'website-content','uses' => 'Admin\AdminWebsiteContent@index' ));
	Route::get('branch-management',array('as' => 'branch-management','uses' => 'Admin\AdminBranch@index' ));
	Route::get('job-order',array('as' => 'job-order','uses' => 'Admin\AdminJobOrder@index'));
	Route::get('settings',array('as' => 'settings','uses' => 'Admin\AdminSettings@index'));
});