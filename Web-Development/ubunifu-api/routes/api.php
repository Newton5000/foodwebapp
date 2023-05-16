<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/create-menu', 'App\Http\Controllers\MenusController@newMenu');

Route::post('/update-menu', 'App\Http\Controllers\MenusController@updateMenu');

Route::post('/delete-menu', 'App\Http\Controllers\MenusController@deleteMenu');

Route::get('/fetch-menu', 'App\Http\Controllers\MenusController@fetchMenu');