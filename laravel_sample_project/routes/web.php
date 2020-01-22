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

// Route::resource('users', 'user_controller');

// Route::get('/', function () {
//     return view('post');
// });

// Route::post('/register', 'user_controller@register');  
// Route::get('/login', 'user_controller@login'); 
Route::get('/view-humans', 'user_controller@retrieve');
Route::get('/add-humans', 'user_controller@addHuman');
Route::post('/add', 'user_controller@add'); 
Route::get('/edit/{id}', 'user_controller@edit'); 
Route::post('/update', 'user_controller@update');  
Route::get('/delete-humans/{id}', 'user_controller@delete')->name('delete'); 

// Route::get('/{any}', function () {
//     return view('post');
//   })->where('any', '.*');
