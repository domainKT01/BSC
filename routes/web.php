<?php

use App\Http\Controllers\pagesController;
use App\Http\Controllers\formController;
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

Route::get('/', [pagesController::class, 'SignUp']);

Route::post('forms.store', [formController::class, 'store'])->name('forms.store');

Route::get('log', [pagesController::class, 'LogIn'])->name('page.login');

Route::get('nada', function(){

    view('auth.login');
});