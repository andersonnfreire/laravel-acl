<?php


Route::group(['prefix' => 'painel'], function ()
{
    //Painel Controller
    // Post Controller
     Route::get('posts','painel\PostController@index');
    // Permission Controller
    //Roles Controller
    
    Route::get('/','painel\PainelController@index');
});


Auth::routes();

Route::get('/','portal\SiteController@index');