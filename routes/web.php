<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function(){
	Route::get('/dashboard', 'App\Http\Controllers\Backend\PageController@dashboard')->middleware(['auth'])->name('dashboard');


	// task list
	Route::group(['prefix' => 'mytask'], function(){
		// manage route
		Route::get('/manage', 'App\Http\Controllers\Backend\TaskController@index')->name('task.manage');
		// create route
		Route::get('/create', 'App\Http\Controllers\Backend\TaskController@create')->name('task.create');
		// store data route
		Route::post('/store','App\Http\Controllers\Backend\TaskController@store')->name('task.store');
		// edit route
		Route::get('/edit/{id}', 'App\Http\Controllers\Backend\TaskController@edit')->name('task.edit');
		// update route
		Route::post('/edit/{id}', 'App\Http\Controllers\Backend\TaskController@update')->name('task.update');
		// delete route
		Route::get('/destroy/{id}', 'App\Http\Controllers\Backend\TaskController@destroy')->name('task.destroy');
	});

});



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
