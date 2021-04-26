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
    return view('greasecycle');
});
Route::get('engineering', function () {
    return view('engineering');
});
Route::get('/font-options', function () {
    return view('fonts');
});
Route::post('/call-back-submit', [App\Http\Controllers\ContactFormController::class, 'requestCallBack']);

