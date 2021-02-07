<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\KompanijaController;
use  App\Http\Controllers\HomepageController;
use App\Http\Controllers\AutomobilController;

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


Route::get('/', [HomepageController::class,'kompanijeStranica']);

Route::get('/kompanije/get', [KompanijaController::class,'ucitavanje']);
Route::get('/kompanije/get-parfemi', [KompanijaController::class,'parfemi_kompanije']);

Route::get('/parfem/get', 'App\Http\Controllers\ParfemController@ucitavanje');
Route::put('/parfem/izmena', 'App\Http\Controllers\ParfemController@izmena');
Route::post('/parfem/dodavanje', 'App\Http\Controllers\ParfemController@dodavanje');
Route::delete('/parfem/brisanje', 'App\Http\Controllers\ParfemController@brisanje');
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

