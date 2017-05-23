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

Route::get('/', function () {
    return view('welcome')->name('welcome');
});

/*Route::group(['prefix' => 'admin/cars', 'middleware' => 'auth.basic'], function(){
	Route::as('admin.cars.')->group(function()
	{
		Route::name('store')->post('/store', 'CarController@store');
		Route::name('store.photos')->post('/{car}/photos', 'PhotoController@store');
		Route::name('index')->get('/', 'CarController@index');
		Route::name('create')->get('/create', 'CarController@create');
		Route::name('update')->put('/{car}/update', 'CarController@update');
		Route::name('show')->get('/{car}', 'CarController@show');
		Route::name('destroy')->delete('/{car}', 'CarController@destroy');
		Route::name('edit')->get('/{car}/edit', 'CarController@edit');
	});
});*/

Route::group(
	['prefix' => 'admin', 
	 'as' => 'admin.',
	 'middleware' => 'auth.basic'],
	  function()
	  {
		Route::resource('cars', 'CarController');
		Route::name('cars.store.images')->post('cars/{car}/images', 'PhotoController@store');
		Route::name('cars.edit.images')->put('cars/{car}/{photo}', 'PhotoController@update');
		Route::name('cars.destroy.images')->delete('cars/{car}/{photo}', 'PhotoController@destroy');
		Route::name('images.index')->get('images', 'CarController@allImages');
		Route::name('destroy.image')->delete('image/{photo}', 'PhotoController@destroyImage');
});
