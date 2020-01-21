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

Route::get('/', function () {
    return view('patient_register');
});

Route::post('/register', 'user_controller@register');  
Route::get('/login', 'user_controller@login'); 
Route::get('/view-humans', 'user_controller@retrieve');    
Route::get('/delete-humans/{id}', 'user_controller@delete'); 
