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
//     Route::get('/', 'FormController@index');
// });

//Route::group([
//
//], function () {
//   Route::get('admin/clients', ['as' => 'admin.clients.listAll', 'uses' => 'FormController@listAll']);
//   Route::get('admin/clients/edit', ['as' => 'admin.clients.editClients', 'uses' => 'FormController@editClients']);
//   Route::get('admin/clients/create', ['as' => 'admin.clients.createClients', 'uses' => 'FormController@createClients']);
//   Route::post('admin/clients/store', ['as' => 'admin.clients.store', 'uses' => 'FormController@store']);
//   Route::get('admin/clients/update', ['as' => 'admin.clients.updateClients', 'uses' => 'FormController@updateClients']);
//   Route::get('admin/clients/show', ['as' => 'admin.clients.showClients', 'uses' => 'FormController@showClients']);
//   Route::delete('admin/clients/{id}', ['as' => 'admin.clients.destroyClients', 'uses' => 'FormController@destroyClients']);
//});

Route::group([
    'prefix' => 'admin'

], function () {
   Route::resource('clients', 'FormController');
});
