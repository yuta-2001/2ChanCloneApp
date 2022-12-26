<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\ResponseController;

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

Route::get('/threds', [ThreadController::class, 'index']);
Route::post('/threds', [ThreadController::class, 'post']);
Route::get('/threds/{id}', [ThreadController::class, 'show']);

Route::post('threds/{thredId}/responses', [ResponseController::class, 'store']);