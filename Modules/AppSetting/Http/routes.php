<?php

Route::group(['middleware' => ['web','admin'], 'as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Modules\AppSetting\Http\Controllers'], function()
{
    		/*
             * For DataTables
             */
            Route::post('appsetting/get', 'AppSettingTableController')->name('appsetting.get');
            /*
             * User CRUD
             */
            Route::resource('appsetting', 'AppSettingController');
});