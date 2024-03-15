<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PublicController;
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




Route::get('/',[PublicController::class,'homepage'])->name('homepage');

Route::get('/chi-siamo', [PublicController::class, 'aboutUs'])->name('aboutUs');

Route::get('/contatti', [PublicController::class, 'contacts'])->name('contacts');

Route::get('/contatto/{id}', [PublicController::class, 'contactDetail'])->name('contact.detail');
