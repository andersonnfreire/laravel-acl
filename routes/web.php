<?php


Route::group(['prefix' => 'painel'], function ()
{
    //Painel Controller
    // Post Controller
    // Permission Controller
    //Roles Controller
    Route::get('/','painel\PainelController@index');
});


Auth::routes();

Route::get('/','SiteController@index');