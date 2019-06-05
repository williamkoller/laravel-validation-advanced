<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('form')->group(function() {
    Route::get('/', 'FormController@index');
});

Route::group([

], function () {
   Route::get('admin/clients', ['as' => 'admin.clients.listAll', 'uses' => 'FormController@listAll']);
   Route::get('admin/clients/edit/{id}', ['as' => 'admin.clients.editClients', 'uses' => 'FormController@editClients']);
});
