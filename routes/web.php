<?php

use App\Http\Controllers\RelationsController;
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

Route::get('/has-one' , [RelationsController::class , 'hasOne']);
Route::get('/has-one-reverse' , [RelationsController::class , 'hasOneReverse']);
Route::get('/has-many' , [RelationsController::class , 'hasMany']);
Route::get('/has-many-reverse' , [RelationsController::class , 'hasManyReverse']);