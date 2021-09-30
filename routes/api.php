<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;

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


    
Route::post('/getUsers', [UsersController::class, 'index']);
Route::post('/addUser', [UsersController::class, 'create']);
Route::put('/updateUser/{id}', [UsersController::class, 'update']);
Route::delete('/deleteUser/{id}', [UsersController::class, 'destroy']);
Route::get('/getUserById/{id}', [UsersController::class, 'show']);

