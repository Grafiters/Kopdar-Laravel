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

Route::get('/', 'WelcomesController@welcome');
Route::get('/about', 'WelcomesController@about');
Route::get('/contact', 'WelcomesController@contact');

// Route::get('/', function () {
//     $tasks = ['makan', 'minum', 'mandi'];

//     return view('welcome', ['tasks' => $tasks]);
// });

// Route::get('/contact', function(){
//     return view('contact');
// });


// Route::get('/about',function(){
//     return view('about');
// });
