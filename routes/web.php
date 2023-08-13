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
    return view('index');
});
Route::post('/mail', [\App\Http\Controllers\MailController::class, 'send'])->name('mail');
Route::get('/success', [\App\Http\Controllers\MailController::class, 'success'])->name('success');
