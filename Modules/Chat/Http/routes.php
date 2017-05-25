<?php

Route::group(['middleware' => 'web', 'prefix' => 'chat', 'namespace' => 'Modules\Chat\Http\Controllers'], function()
{
    Route::get('/', 'ChatController@index');
    Route::get('/messages', function () {
    	//Get All Messages
    	return Modules\Chat\Entities\Message::with('user')->get();
    });
    Route::post('/message', 'ChatController@sendMessage');
});
