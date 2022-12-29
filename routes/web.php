<?php

use App\Http\Controllers\WeaponController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('/weapon')->name('weapon.')->group(function() {
    Route::get('start', [WeaponController::class, 'start'])->name('start');
    Route::get('question', [WeaponController::class, 'question'])->name('question');
    Route::post('answer', [WeaponController::class, 'answer'])->name('answer');
});