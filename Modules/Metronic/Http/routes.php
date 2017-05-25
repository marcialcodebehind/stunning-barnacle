<?php

Route::group(['middleware' => 'web', 'prefix' => 'metronic', 'namespace' => 'Modules\Metronic\Http\Controllers'], function()
{
    Route::get('/setting', ['as' => 'metronic.setting', 'uses' => 'MetronicController@setting']);
});
