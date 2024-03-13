<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/-pagina2', function(){
    return view('pagina2');
});

Route::get('welcome', function(){
    return view('/welcome');
});

Route::get('-pagina4', function(){
    return view('pagina4');
});
Route::get('-pagina3', function(){
    return view('/pagina3');
});

Route::get('-home', function(){
    return view('welcome');
});