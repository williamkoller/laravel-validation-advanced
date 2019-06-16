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

// Route::prefix('form')->group(function() {
////     Route::get('/', 'FormController@index');
//// });
//
//Route::group([
//
//], function () {
//   Route::get('admin/clients', ['as' => 'admin.clients.listAll', 'uses' => 'FormController@listAll']);
//   Route::get('admin/clients/edit/{id}', ['as' => 'admin.clients.editClients', 'uses' => 'FormController@editClients']);
//   Route::get('admin/clients/create', ['as' => 'admin.clients.createClients', 'uses' => 'FormController@createClients']);
//   Route::get('admin/clients/store', ['as' => 'admin.clients.store', 'uses' => 'FormController@store']);
//});

Route::group([
    'prefix' => 'admin'

], function () {
   Route::resource('clients', 'FormController');
});
