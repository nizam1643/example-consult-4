<?php

use App\Http\Controllers\GenderController;
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


Route::controller(GenderController::class)
    ->prefix('gender')
    ->as('gender.')
    ->group(function () {
        Route::get('', 'indexGenders')->name('index');
        Route::get('create', 'createGenders')->name('create');
        Route::post('store', 'storeGenders')->name('store');
});
