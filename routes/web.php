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
    return view('Landing.home', [
        'active' => 'Home'
    ]);
});

Route::get('/internship', function(){
    return view('Project.internship');
});

Route::get('/achievements', function(){
    return view('Achievements.achievements', [
        'active' => 'Achievements'
    ]);
});
