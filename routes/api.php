<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\SandwicheController;
use App\Http\Controllers\TacosController;
use App\Http\Controllers\TarteController;
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

Route::get('pizza', [PizzaController::class, 'index']);
Route::get('tacos', [TacosController::class, 'index']);
Route::get('sandwiche', [SandwicheController::class, 'index']);
Route::get('tarte', [TarteController::class, 'index']);
Route::get('home', [HomeController::class, 'index']);
