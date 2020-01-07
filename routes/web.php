<?php


Route::group(['prefix' => 'painel'], function ()
{
    //Painel Controller
    Route::get('/','painel\PainelController@index');
    
    // Post Controller
     Route::get('posts','painel\PostController@index');
     
    // Permission Controller
    Route::get('permissions','painel\PermissionController@index');
    Route::get('permissions/{id}/roles','painel\PermissionController@roles');
    
    //Roles Controller
    Route::get('roles','painel\RoleController@index');
    Route::get('role/{id}/permissions','painel\RoleController@permissions');
    
    //Users Controller
    Route::get('users','painel\UserController@index');
    Route::get('user/{id}/roles','painel\UserController@roles');
});


Auth::routes();

Route::get('/','portal\SiteController@index');