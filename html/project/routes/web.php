<?php

//use Illuminate\Support\Facades\Route;
use App\Http\Controllers\XXXController;
use App\Http\Controllers\MemberController;

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

Route::get('/', 'App\Http\Controllers\MemberController@index');
Route::resource('XXX', XXXController::class);
Route::resource('Member', MemberController::class);

Route::get('/practice', 'App\Http\Controllers\MemberController@practice');
Route::post('/find', 'App\Http\Controllers\MemberController@find');
Route::get('/get', 'App\Http\Controllers\MemberController@get');
Route::post('/test_members', 'App\Http\Controllers\MemberController@main');

