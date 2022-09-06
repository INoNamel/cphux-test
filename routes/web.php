<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\UsersImportController;
use App\Http\Controllers\TestController;
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

Route::get('/home', function () { return view('home');});
Route::get('/', function () { return view('home');});

Route::post('/upload-data', 'App\Http\Controllers\UploadDataController@store');

Route::get('/view-data', 'App\Http\Controllers\ViewDataController@view_data');